<?php
require('vendor/autoload.php');

use Razorpay\Api\Api;

$api = new Api('rzp_test_Uymitt5bu4Dp7Q', 'THszHpYNh4PBmQKsucp912Kq');

// Read the JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

$success = true;
$error = "Payment Failed";

if (!empty($data['razorpay_payment_id'])) {
    $razorpay_payment_id = $data['razorpay_payment_id'];
    $razorpay_order_id = $data['razorpay_order_id'];
    $razorpay_signature = $data['razorpay_signature'];

    // Verify the payment signature
    $attributes = array(
        'razorpay_order_id' => $razorpay_order_id,
        'razorpay_payment_id' => $razorpay_payment_id,
        'razorpay_signature' => $razorpay_signature
    );

    try {
        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true) {
    echo "Payment Successful";
} else {
    echo "Payment Failed: " . $error;
}
?>
