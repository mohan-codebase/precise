<?php
// execute_payment.php
require 'vendor/autoload.php';

use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

// --- CONFIG (move to environment variables in production) ---
$clientId     = 'ASJQyCyGK6uKYaMMyOXb1wXXW1Q4OEcSJfxV_xYzXlccJZ-efkhFTtgim2mECDU4qZRtajbrkJBtqifY';
$clientSecret = 'EKP01rrLL4w9b0RBHppBAqs0-6_52cbs6ybZn1c02848AbsgujIHxcDLCo6KD2B_gj17JcWIekqDiCZv';

$apiContext = new ApiContext(new OAuthTokenCredential($clientId, $clientSecret));
$apiContext->setConfig([
  'mode'           => 'sandbox',  // change to 'live' for production
  'log.LogEnabled' => true,
  'log.FileName'   => 'PayPal.log',
  'log.LogLevel'   => 'DEBUG',    // prefer 'INFO' in production
  'cache.enabled'  => true,
]);

// --- VALIDATE INPUTS FROM PAYPAL REDIRECT ---
$success   = isset($_GET['success']) ? $_GET['success'] : null;
$paymentId = isset($_GET['paymentId']) ? $_GET['paymentId'] : null;
$payerId   = isset($_GET['PayerID']) ? $_GET['PayerID'] : null;

if ($success !== 'true') {
  http_response_code(400);
  echo "<h2>Payment canceled.</h2><p>You canceled the PayPal approval flow.</p>";
  exit;
}

if (!$paymentId || !$payerId) {
  http_response_code(400);
  echo "<h2>Missing payment information.</h2><p>paymentId or PayerID not provided by PayPal.</p>";
  exit;
}

try {
  // 1) Fetch the payment object
  $payment = Payment::get($paymentId, $apiContext);

  // 2) Execute the approved payment
  $execution = new PaymentExecution();
  $execution->setPayerId($payerId);

  // If you need to update amounts/transactions here, you can attach a Transaction to $execution.

  $result = $payment->execute($execution, $apiContext);

  // 3) Inspect result (you can persist order in DB here)
  $state = $result->getState(); // typically "approved" on success
  $tx    = $result->getTransactions()[0];
  $amt   = $tx->getAmount();
  $total = $amt ? $amt->getTotal() : null;
  $curr  = $amt ? $amt->getCurrency() : null;
  $saleId = null;

  // Try to pull sale/transaction id for your records
  $related = $tx->getRelatedResources();
  if (!empty($related) && isset($related[0]) && $related[0]->getSale()) {
    $saleId = $related[0]->getSale()->getId();
  }

  // --- Success UI (replace with your own Thank You page or redirect) ---
  if ($state === 'approved') {
    // Example: redirect to your own thank-you route with order references
    // header("Location: /thank-you.php?paymentId={$paymentId}&saleId={$saleId}");
    // exit;

    echo "<h2>Payment successful ✅</h2>";
    echo "<p><strong>Status:</strong> {$state}</p>";
    echo "<p><strong>Payment ID:</strong> {$paymentId}</p>";
    if ($saleId) echo "<p><strong>Sale ID:</strong> {$saleId}</p>";
    echo "<p><strong>Amount:</strong> {$total} {$curr}</p>";

    // TODO: Save order in your DB, send confirmation email, etc.
  } else {
    http_response_code(400);
    echo "<h2>Payment not approved.</h2>";
    echo "<p>Status: {$state}</p>";
  }

} catch (\PayPal\Exception\PayPalConnectionException $ex) {
  // PayPal SDK errors (bad request, validation, etc.)
  $payload = $ex->getData();
  error_log('[PayPalConnectionException] ' . $payload);
  http_response_code(400);
  echo "<h2>PayPal error occurred.</h2><p>Please try again or contact support.</p>";

} catch (\Exception $ex) {
  // Any other errors
  error_log('[Exception] ' . $ex->getMessage());
  http_response_code(500);
  echo "<h2>Unexpected error.</h2><p>Please try again later.</p>";
}
