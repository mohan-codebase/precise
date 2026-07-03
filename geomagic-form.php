<?php
ob_start(); // Start output buffering

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name'         => $_POST['name'] ?? '',
        'company_name' => $_POST['company_name'] ?? '',
        'job_title'    => $_POST['job_title'] ?? '',
        'email'        => $_POST['email'] ?? '',
        'number'       => $_POST['number'] ?? '',
        'country1'     => $_POST['country1'] ?? '',
        'Version'      => $_POST['Version'] ?? '',
        'Application'  => $_POST['Application'] ?? '',
        'Specify'      => $_POST['Specify'] ?? '',
        'free'         => isset($_POST['free']) ? 'Free Instant Demo' : '',
        'Comparison'   => isset($_POST['Comparison']) ? 'Product Comparison' : '',
        'Other'        => isset($_POST['Other']) ? 'Other' : '',
        'eemail'       => isset($_POST['eemail']) ? 'Email' : '',
        'phonee'       => isset($_POST['phonee']) ? 'Phone' : '',
        'Additional'   => $_POST['Additional'] ?? '',
    ];

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'precise3dmdre@gmail.com'; // Your Gmail address
        $mail->Password   = 'nctdxqoxvqhflyaj'; // Your Gmail App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587; // Use port 587 for STARTTLS
        $mail->SMTPDebug  = 3; // Enable detailed debug output for testing
        
        // Bypass SSL verification for local testing (Not recommended for production)
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Sender and recipient
        $mail->setFrom('precise3dmdre@gmail.com', 'Form Notification');
        $mail->addAddress('precise3dmdre@gmail.com'); // Recipient email
        $mail->addReplyTo($data['email'], $data['name']);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Geomagic Form Submission';

        $mail->Body = "
        <h2>Geomagic Form Submission</h2>
        <table border='1' cellpadding='5' cellspacing='0' style='width:100%; border-collapse: collapse;'>
            <tr><th align='left'>Name</th><td>{$data['name']}</td></tr>
            <tr><th align='left'>Company Name</th><td>{$data['company_name']}</td></tr>
            <tr><th align='left'>Job Title</th><td>{$data['job_title']}</td></tr>
            <tr><th align='left'>Email</th><td>{$data['email']}</td></tr>
            <tr><th align='left'>Phone Number</th><td>{$data['number']}</td></tr>
            <tr><th align='left'>Country</th><td>{$data['country1']}</td></tr>
            <tr><th align='left'>Version</th><td>{$data['Version']}</td></tr>
            <tr><th align='left'>Application</th><td>{$data['Application']}</td></tr>
            <tr><th align='left'>Specify</th><td>{$data['Specify']}</td></tr>
            <tr><th align='left'>Interest</th><td>{$data['free']} {$data['Comparison']} {$data['Other']}</td></tr>
            <tr><th align='left'>Preferred Contact Method</th><td>{$data['eemail']} {$data['phonee']}</td></tr>
            <tr><th align='left'>Additional Comments</th><td>{$data['Additional']}</td></tr>
        </table>
        ";

        // Send email
        if ($mail->send()) {
            // Redirect to Google Drive link after successful message sending
            header("Location: https://drive.google.com/file/d/1vm_ZdnhCZGtQc_XOu_7QI3L5eAWxtx5-/view?usp=sharing");
            exit(); // Always call exit after header redirection
        } else {
            echo "Message could not be sent.";
        }
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}

ob_end_flush(); // End output buffering and flush the output
?>
