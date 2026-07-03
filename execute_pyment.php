<?php
require 'vendor/autoload.php';

$clientId = 'ASJQyCyGK6uKYaMMyOXb1wXXW1Q4OEcSJfxV_xYzXlccJZ-efkhFTtgim2mECDU4qZRtajbrkJBtqifY';
$clientSecret = 'EKP01rrLL4w9b0RBHppBAqs0-6_52cbs6ybZn1c02848AbsgujIHxcDLCo6KD2B_gj17JcWIekqDiCZv';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential($clientId, $clientSecret)
);

if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $paymentId = $_GET['paymentId'];
    $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);

    $execution = new \PayPal\Api\PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);

    try {
        $result = $payment->execute($execution, $apiContext);
        try {
            $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
            echo "Payment successful!";
        } catch (Exception $ex) {
            // Handle exception
            exit(1);
        }
    } catch (Exception $ex) {
        // Handle exception
        exit(1);
    }
} else {
    echo "User cancelled the payment.";
}
?>