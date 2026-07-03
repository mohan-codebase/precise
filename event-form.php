<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* Email Template Render */
function render_email($email, $data) {
    ob_start();
    include "event-form.phtml";
    return ob_get_contents();
}

if ($_POST) {
    // Form data
    $data['eventplace'] = isset($_POST['eventplace']) ? $_POST['eventplace'] : '';
    $data['title'] = isset($_POST['title']) ? $_POST['title'] : '';
    $data['fname'] = isset($_POST['fname']) ? $_POST['fname'] : '';
    $data['lname'] = isset($_POST['lname']) ? $_POST['lname'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['designation'] = isset($_POST['designation']) ? $_POST['designation'] : '';
    $data['number'] = isset($_POST['number']) ? $_POST['number'] : '';
    $data['cname'] = isset($_POST['cname']) ? $_POST['cname'] : '';
    $data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
    $data['country'] = isset($_POST['country']) ? $_POST['country'] : '';
    $data['state'] = isset($_POST['state']) ? $_POST['state'] : '';
    $data['city'] = isset($_POST['city']) ? $_POST['city'] : '';
    $data['pin'] = isset($_POST['pin']) ? $_POST['pin'] : '';
    $data['website'] = isset($_POST['website']) ? $_POST['website'] : '';

    $body = render_email('email', $data);

    $subject = "You have a message from Event Form";
    $to = "sm@precise3dm.com";
    $from = "sm@precise3dm.com";

    // PHPMailer Object
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
    $mail->FromName = "Event Form Details";
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        echo "sent";
        $_SESSION['status'] = "success";
    } catch (Exception $e) {
        print_r(error_get_last());
        echo "Error: Message not accepted";
        $_SESSION['status'] = "failure";
    }

    // Redirect based on eventplace
    if ($data['eventplace'] == 'Pune Event') {
        header("Location: https://www.precise3dm.com/event-pune-thankyou.php");
    } elseif ($data['eventplace'] == 'Bangalore Event') {
        header("Location: https://www.precise3dm.com/event-bangalore-thankyou.php");
    } else {
        header("Location: https://www.precise3dm.com/");
    }
    exit;
}
?>
