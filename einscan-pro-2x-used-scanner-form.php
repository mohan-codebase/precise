<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $company_name = $_POST['company_name'] ?? '';
    $company_email = $_POST['company_email'] ?? '';

    if (empty($email) || empty($phone) || empty($company_name) || empty($company_email)) {
        die('Please fill in all required fields.');
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'precise3dmdre@gmail.com';
        $mail->Password = 'nctdxqoxvqhflyaj';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('precise3dmdre@gmail.com', 'Website Form');
        $mail->addAddress('precise3dmdre@gmail.com', 'Receiver Name');

        $mail->isHTML(true);
        $mail->Subject = 'EinScan Pro 2X Used Scanner Form Submission';
        $mail->Body    = "
            <h3>EinScan Pro 2X Used Scanner Form Submission Details:</h3>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone Number:</strong> {$phone}</p>
            <p><strong>Company Name:</strong> {$company_name}</p>
            <p><strong>Company Email:</strong> {$company_email}</p>
        ";

        $mail->send();

        // ✅ Show alert and redirect using JavaScript
        echo "<script>
            alert('Your message was sent successfully!');
            window.history.back(); // go back to previous page
        </script>";
        exit();

    } catch (Exception $e) {
        echo "<script>
            alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
            window.history.back();
        </script>";
    }
}
?>
