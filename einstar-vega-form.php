<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = $_POST['name'] ?? '';
    $email  = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'precise3dmdre@gmail.com';
        $mail->Password   = 'nctdxqoxvqhflyaj';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        $mail->setFrom('precise3dmdre@gmail.com', 'Einstar Form');
        $mail->addAddress('precise3dmdre@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New Einstar Vega Form Submission';
        $mail->Body = "
            <h2>New Einstar Vega Form Submission</h2>
            <table border='1' cellpadding='8'>
                <tr><th>Name</th><td>{$name}</td></tr>
                <tr><th>Email</th><td>{$email}</td></tr>
                <tr><th>Phone</th><td>{$number}</td></tr>
            </table>
        ";

        if ($mail->send()) {
            echo "<script>window.location.href='https://precise3dm.com/thankyou-page.php';</script>";
        } else {
            echo "<script>alert('Message could not be sent.'); window.history.back();</script>";
        }
    } catch (Exception $e) {
        echo "<h3>Error sending email:</h3>";
        echo "<pre>{$mail->ErrorInfo}</pre>";
    }
} else {
    echo "<h3>Invalid Request</h3>";
}
?>
