<?php
session_start();

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Function to render the email template
function render_email($email, $data)
{
    ob_start();
    include "contact-us-mail.phtml";
    return ob_get_clean();
}

if ($_POST) {
    if (isset($_POST["hidden-input"]) && !empty($_POST["hidden-input"])) {
        // If hidden input is filled, it's likely a bot submission
        header("Location: https://www.precise3dm.com/");
        exit;
    }

    $data['fullname'] = $_POST['fullname'] ?? '';
    $data['companyname'] = $_POST['companyname'] ?? '';
    $data['useremail'] = $_POST['useremail'] ?? '';
    $data['mobnum'] = $_POST['mobnum'] ?? '';
    $data['message'] = $_POST['message'] ?? '';
    $body = render_email('email', $data);

    $subject = "You have a message from your client from contact us";
    $to = "marketing@precise3dm.com";
    $from = "marketing@precise3dm.com";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    // $mail->SMTPDebug = 3;  
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "precise3dmdre@gmail.com";
    $mail->Password = "nctdxqoxvqhflyaj";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $from;
    $mail->FromName = "contact us details";
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        $_SESSION['status'] = "success";
    } catch (Exception $e) {
        $_SESSION['status'] = "failure";
    }

    header("Location: https://www.precise3dm.com/contact-us.php");
    exit;
}
?>
