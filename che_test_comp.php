<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/*Email Template Render*/
function render_email($email, $data)
{
    ob_start();
    include "che_email_test_comp.phtml";
    return ob_get_contents();
}

if ($_POST) {
    $data['che_name'] = isset($_POST['che_name']) ? $_POST['che_name'] : '';
    $data['che_email'] = isset($_POST['che_email']) ? $_POST['che_email'] : '';
    $data['che_contnum'] = isset($_POST['che_contnum']) ? $_POST['che_contnum'] : '';
    $data['che_companyname'] = isset($_POST['che_companyname']) ? $_POST['che_companyname'] : '';
    $data['che_pickup'] = isset($_POST['che_pickup']) ? $_POST['che_pickup'] : '';
    $data['che_component'] = isset($_POST['che_component']) ? $_POST['che_component'] : '';
    $data['che_accuracy'] = isset($_POST['che_accuracy']) ? $_POST['che_accuracy'] : '';
    $data['gomscan'] = isset($_POST['gomscan']) ? 'yes' : 'no';
    $data['freescan'] = isset($_POST['freescan']) ? 'yes' : 'no';
    $data['einscan'] = isset($_POST['einscan']) ? 'yes' : 'no';
    $data['longrange3d'] = isset($_POST['longrange3d']) ? 'yes' : 'no';
    $data['faroarm3d'] = isset($_POST['faroarm3d']) ? 'yes' : 'no';
    $data['upload_link'] = '';

    /*Upload Function*/
    // if (isset($_FILES['uploadscan']) && $_FILES['uploadscan']['size'] > 0) {

    //     $uploadfile_name = $_FILES["uploadscan"]["name"];

    //     $filename   = uniqid() . "-" . time();

    //     $extension  = pathinfo($_FILES["uploadscan"]["name"], PATHINFO_EXTENSION);

    //     $filename = $filename . "." . $extension;

    //     $folder = "chennai_servicess";

    //     if (!is_dir($folder)) {
    //         mkdir($folder, 0777, true);
    //     }

    //     move_uploaded_file($_FILES["uploadscan"]["tmp_name"], $folder . "/" . $filename);

    //     $data['upload_link'] = "https://precise3dm.com" . "/" . $folder . "/" . $filename;
    // }

    $body = render_email('email', $data);

    $subject = "You have a message from your client from chennai service component form";

    $to = "service@precise3dm.com";
    // $to = "aaranrims@gmail.com";
    $from = "precise3dmdre@gmail.com";

    //PHPMailer Object
    $mail = new PHPMailer\PHPMailer\PHPMailer(); //Argument true in constructor enables exceptions

    // $mail->SMTPDebug = 3;  
    $mail->SMTPDebug = false;
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password     
    $mail->Username = "precise3dmdre@gmail.com";
    $mail->Password = "Precise@123";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";
    //Set TCP port to connect to
    $mail->Port = 465;

    //From email address and name
    $mail->From = $from;
    $mail->FromName = "Customer Submitted a form";

    //To address and name
    //$mail->addAddress("limtion.digital@gmail.com", "Limtion Site");
    $mail->addAddress($to); //Recipient name is optional

    //Address to which recipient will reply
    // $mail->addReplyTo("aaranrims@yourdomain.com", "Reply");

    //CC and BCC
    //$mail->addCC("aaranrims@gmail.com");status-message
    //$mail->addBCC("bcc@example.com");

    //Send HTML or Plain Text email
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
}
header("Location: ". $_SERVER['HTTP_REFERER']);
// header("Location: https://www.precise3dm.com/scanning_service_chennai.php#pickup_section");
exit;
?>