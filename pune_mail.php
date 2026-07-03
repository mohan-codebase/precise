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
    include "pune_mailtemplate.phtml";
    return ob_get_contents();
}

if($_POST)
{
    $data['nameche'] = isset($_POST['che_name']) ? $_POST['che_name']:'';
	$data['emailche'] = isset($_POST['che_email']) ? $_POST['che_email']:'';
	$data['contactnumberche'] = isset($_POST['che_contnum']) ? $_POST['che_contnum']:'';
	$data['companyche'] = isset($_POST['che_companyname']) ? $_POST['che_companyname']:'';
	$data['gstche'] = isset($_POST['che_gst']) ? $_POST['che_gst']:'';
	$data['accuracy_check1'] = isset($_POST['accuracy_check1']) ? 'yes': 'no';
	$data['accuracy_check2'] = isset($_POST['accuracy_check2']) ? 'yes': 'no';
	$data['accuracy_check3'] = isset($_POST['accuracy_check3']) ? 'yes': 'no';
	$data['accuracy_check4'] = isset($_POST['accuracy_check4']) ? 'yes': 'no';
	$data['accuracy_check5'] = isset($_POST['accuracy_check5']) ? 'yes': 'no';
	$data['scan_check1'] = isset($_POST['scan_check1']) ? 'yes': 'no';
	$data['scan_check2'] = isset($_POST['scan_check2']) ? 'yes': 'no';
	$data['scan_check3'] = isset($_POST['scan_check3']) ? 'yes': 'no';
	$data['scan_check4'] = isset($_POST['scan_check4']) ? 'yes': 'no';
	$data['scan_check5'] = isset($_POST['scan_check5']) ? 'yes': 'no';
	$data['scan_check6'] = isset($_POST['scan_check6']) ? 'yes': 'no';
	$data['service_check1'] = isset($_POST['service_check1']) ? 'yes': 'no';
	$data['service_check2'] = isset($_POST['service_check2']) ? 'yes': 'no';
	$data['service_check3'] = isset($_POST['service_check3']) ? 'yes': 'no';
	$data['service_check4'] = isset($_POST['service_check4']) ? 'yes': 'no';
	$data['service_check5'] = isset($_POST['service_check5']) ? 'yes': 'no';
	$data['upload_link'] = '';

	/*Upload Function*/
	if(isset($_FILES['uploadscan']) && $_FILES['uploadscan']['size'] > 0)
	{

	  $uploadfile_name=$_FILES["uploadscan"]["name"];

	  $filename   = uniqid() . "-" . time();

	  $extension  = pathinfo( $_FILES["uploadscan"]["name"], PATHINFO_EXTENSION );

	  $filename = $filename.".".$extension;

	  $folder="chennai_services";

  		if (!is_dir($folder)) {
    		mkdir($folder, 0777, true);
		}

	  move_uploaded_file($_FILES["uploadscan"]["tmp_name"], $folder."/".$filename);

	  $data['upload_link'] = "https://precise3dm.com"."/".$folder."/".$filename;
	}

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
// header("Location: index.php");
header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>