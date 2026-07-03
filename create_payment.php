<?php
require 'vendor/autoload.php';

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

// TODO: move to environment variables
$clientId     = 'ASJQyCyGK6uKYaMMyOXb1wXXW1Q4OEcSJfxV_xYzXlccJZ-efkhFTtgim2mECDU4qZRtajbrkJBtqifY';
$clientSecret = 'EKP01rrLL4w9b0RBHppBAqs0-6_52cbs6ybZn1c02848AbsgujIHxcDLCo6KD2B_gj17JcWIekqDiCZv';

$apiContext = new ApiContext(new OAuthTokenCredential($clientId, $clientSecret));
$apiContext->setConfig([
  'mode'           => 'sandbox',          // change to 'live' in production
  'log.LogEnabled' => true,
  'log.FileName'   => 'PayPal.log',
  'log.LogLevel'   => 'DEBUG',            // prefer 'INFO' in production
  'cache.enabled'  => true,
]);

// Helper to read POST values safely
$getFloat = function(string $key) {
  $v = filter_input(INPUT_POST, $key, FILTER_VALIDATE_FLOAT);
  return ($v !== false && $v !== null) ? (float)$v : null;
};
$getInt = function(string $key) {
  $v = filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);
  return ($v !== false && $v !== null) ? (int)$v : null;
};
$getStr = function(string $key, string $default = '') {
  $v = isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
  return $v !== '' ? $v : $default;
};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo 'Method not allowed.';
  exit;
}

/**
 * Accept multiple possible field names:
 * - total_price_usd (float, preferred for PayPal USD)
 * - total_price_inr (int)
 * - total_price (generic fallback, with optional currency)
 */
$amountUsd = $getFloat('total_price_usd');
$amountInr = $getInt('total_price_inr');
$totalPriceGeneric = $getStr('total_price');            // could be int or float as string
$postedCurrency    = strtoupper($getStr('currency', '')); // optional; 'INR' or 'USD'

// Optional: product info (not strictly required for PayPal)
$productName = $getStr('product_name', 'Order');
$invoiceId   = uniqid('INV_', true);

// Optional: custom return/cancel (fallback to your domain)
$returnUrl = $getStr('return_url', 'https://precise3dm.com/execute_payment.php?success=true');
$cancelUrl = $getStr('cancel_url', 'https://precise3dm.com/execute_payment.php?success=false');

// Decide currency/amount:
//
// Priority:
// 1) If total_price_usd present -> use USD (formatted 2 decimals)
// 2) Else if total_price_inr present -> use INR (integer string)
// 3) Else if total_price (generic) present -> use posted currency if valid, else default to USD
$currency = null;
$amountForPayPal = null;

if ($amountUsd !== null && $amountUsd > 0) {
  $currency = 'USD';
  // PayPal expects a string with 2 decimals for USD
  $amountForPayPal = number_format($amountUsd, 2, '.', '');
} elseif ($amountInr !== null && $amountInr > 0) {
  $currency = 'INR';
  // PayPal amount value should be a string; INR typically sent as integer
  $amountForPayPal = (string)$amountInr;
} elseif ($totalPriceGeneric !== '') {
  // Try to interpret generic amount; prefer posted currency if valid
  $currency = in_array($postedCurrency, ['USD','INR'], true) ? $postedCurrency : 'USD';

  // If currency is USD, format to 2 decimals; else pass as integer-like string
  if ($currency === 'USD') {
    $val = (float)$totalPriceGeneric;
    if ($val <= 0) {
      echo 'Total price must be greater than 0.';
      exit;
    }
    $amountForPayPal = number_format($val, 2, '.', '');
  } else { // INR (or anything else you add later)
    $val = (int)$totalPriceGeneric;
    if ($val <= 0) {
      echo 'Total price must be greater than 0.';
      exit;
    }
    $amountForPayPal = (string)$val;
  }
} else {
  echo 'Total price not set.';
  exit;
}

// [Important Note] Some PayPal accounts cannot process INR
// in certain regions/modes. If you get currency errors,
// send USD instead (use total_price_usd from the form) or
// convert INR server-side before creating the payment.

try {
  $payer = new Payer();
  $payer->setPaymentMethod('paypal');

  $amount = new Amount();
  $amount->setCurrency($currency)
         ->setTotal($amountForPayPal);

  $transaction = new Transaction();
  $transaction->setAmount($amount)
              ->setDescription($productName)
              ->setInvoiceNumber($invoiceId);

  $redirectUrls = new RedirectUrls();
  $redirectUrls->setReturnUrl($returnUrl)
               ->setCancelUrl($cancelUrl);

  $payment = new Payment();
  $payment->setIntent('sale')
          ->setPayer($payer)
          ->setRedirectUrls($redirectUrls)
          ->setTransactions([$transaction]);

  $payment->create($apiContext);

  // Redirect buyer to PayPal approval
  header('Location: ' . $payment->getApprovalLink());
  exit;
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
  // Show concise message, log full payload
  $payload = $ex->getData();
  error_log('[PayPalConnectionException] ' . $payload);
  http_response_code(400);
  echo 'PayPal error occurred. Please try again or contact support.';
  exit;
} catch (\Exception $ex) {
  error_log('[Exception] ' . $ex->getMessage());
  http_response_code(500);
  echo 'Unexpected error. Please try again later.';
  exit;
}
