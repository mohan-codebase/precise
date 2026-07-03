<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_POST) {
    // Collect form/payment data
    $data['name']          = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email']         = isset($_POST['email']) ? $_POST['email'] : '';
    $data['number']        = isset($_POST['number']) ? $_POST['number'] : '';
    $data['state']         = isset($_POST['state']) ? $_POST['state'] : '';
    $data['city']          = isset($_POST['city']) ? $_POST['city'] : '';
    $data['address']       = isset($_POST['address']) ? $_POST['address'] : '';
    $data['bill_address']  = isset($_POST['Bill_address']) ? $_POST['Bill_address'] : '';
    $data['gst']           = isset($_POST['gst']) ? $_POST['gst'] : '';
    $data['total_price']   = isset($_POST['total_price']) ? $_POST['total_price'] : '';
    $data['razorpay_payment_id'] = isset($_POST['razorpay_payment_id']) ? $_POST['razorpay_payment_id'] : '';
    $data['product_name']  = isset($_POST['product_name']) ? $_POST['product_name'] : '';
    $data['product_qty']   = isset($_POST['product_quantity']) ? $_POST['product_quantity'] : '';


    // Build email body
    $body  = "<h2>New Payment Received</h2>";
    $body .= "<p><strong>Product Name:</strong> {$data['product_name']}</p>";
    $body .= "<p><strong>Quantity:</strong> {$data['product_qty']}</p>";
    $body .= "<p><strong>Payment ID:</strong> {$data['razorpay_payment_id']}</p>";
    $body .= "<p><strong>customer Name:</strong> {$data['name']}</p>";
    $body .= "<p><strong>Email:</strong> {$data['email']}</p>";
    $body .= "<p><strong>Mobile:</strong> {$data['number']}</p>";
    $body .= "<p><strong>State:</strong> {$data['state']}</p>";
    $body .= "<p><strong>City:</strong> {$data['city']}</p>";
    $body .= "<p><strong>Delivery Address:</strong> {$data['address']}</p>";
    $body .= "<p><strong>Billing Address:</strong> {$data['bill_address']}</p>";
    $body .= "<p><strong>GST Number:</strong> {$data['gst']}</p>";
    $body .= "<p><strong>Total Price (USD):</strong> {$data['total_price']}</p>";

    $subject = "New Payment Notification - {$data['name']}";
    $to = "sm@precise3dm.com";
    $from = "sm@precise3dm.com";

    // PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "precise3dmdre@gmail.com";
    $mail->Password = "nctdxqoxvqhflyaj"; // <-- App password
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $from;
    $mail->FromName = "Payment Form";
    $mail->addAddress($to);

    // (Optional) Send confirmation copy to customer
    if (!empty($data['email'])) {
        $mail->addCC($data['email']);
    }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        echo json_encode(["status" => "success", "message" => "Email sent successfully"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "failure", "message" => "Mailer Error: " . $mail->ErrorInfo]);
    }
}
?>
