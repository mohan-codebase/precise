<?php
require('vendor/autoload.php');

use Razorpay\Api\Api;

session_start();

// Your Razorpay API Key and Secret
$api = new Api('rzp_test_Uymitt5bu4Dp7Q', 'THszHpYNh4PBmQKsucp912Kq');

// Check if product_id is posted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Check if product exists
    if (!isset($products[$product_id])) {
        die('Invalid product');
    }

    $product = $products[$product_id];
    $amount = $product['price'] * 100; // Convert to paise

    // Create an order in Razorpay
    $orderData = [
        'receipt'         => 'rcptid_11',
        'amount'          => $amount, // amount in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);

    $razorpayOrderId = $razorpayOrder['id'];
    $_SESSION['razorpay_order_id'] = $razorpayOrderId;
    $_SESSION['amount'] = $amount;

    // Redirect to the checkout page
    header('Location: checkout.php');
    exit();
} else {
    die('Invalid request');
}
?>
