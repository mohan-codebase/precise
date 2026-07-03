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
function render_email($email, $data) {
    ob_start();
    include "gmagicquote_mailtemplate.phtml";
    return ob_get_contents();
}

if($_POST)
{
    $data['fname'] = isset($_POST['fname']) ? $_POST['fname']:'';
	$data['newcompanyname'] = isset($_POST['newcompanyname']) ? $_POST['newcompanyname']:'';
	$data['contnum'] = isset($_POST['contnum']) ? $_POST['contnum']:'';
	$data['selectProduct'] = isset($_POST['selectProduct']) ? $_POST['selectProduct']:'';
	$data['newemail'] = isset($_POST['newemail']) ? $_POST['newemail']:'';
	$data['quantity'] = isset($_POST['quantity']) ? $_POST['quantity']:'';
	$data['licence_type'] = $_POST["licence_type"];
	$data['demoqty'] = $_POST["demoqty"];
	
	

	$body = render_email('email', $data);

	$subject = "You have a message from your client";

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
	//$mail->addCC("aaranrims@gmail.com");
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
header("Location: https://www.precise3dm.com/reverse-engineering-geomagic-design-x.php");
// header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>