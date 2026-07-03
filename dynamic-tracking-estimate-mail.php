<?php
session_start();

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Function to render the email template
function render_email($email, $data)
{
    ob_start();
    include "dynamic-tracking-estimate-mail.phtml";
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
    
    $data['project_location'] = $_POST['project_location'] ?? '';
    $data['object_size'] = $_POST['object_size'] ?? '';
    $data['required_output'] = $_POST['required_output'] ?? '';
    $data['accuracy_req'] = $_POST['accuracy_req'] ?? '';
    
    $data['expected_timeline'] = $_POST['expected_timeline'] ?? '';
    $data['additional_req_1'] = $_POST['additional_req_1'] ?? '';
    $data['additional_req_2'] = $_POST['additional_req_2'] ?? '';
    
    $body = render_email('email', $data);

    $subject = "New Estimate Request: Dynamic Tracking 3D Scanning";
    $to = "marketing@precise3dm.com";
    $from = "marketing@precise3dm.com";

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "precise3dmdre@gmail.com";
    $mail->Password = "nctdxqoxvqhflyaj";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $from;
    $mail->FromName = "Dynamic Tracking Estimate Request";
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

    header("Location: dynamic-tracking-3d-scanning-services-new.php");
    exit;
}
?>
