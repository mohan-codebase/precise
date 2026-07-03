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
    include "digi-insp-template.phtml";
    return ob_get_contents();
}

if($_POST)
{
	$data['name'] = isset($_POST['name']) ? $_POST['name']:'';
	$data['email'] = isset($_POST['email']) ? $_POST['email']:'';
	$data['companyname'] = isset($_POST['companyname']) ? $_POST['companyname']:'';
	$data['contactnumber'] = isset($_POST['contactnumber']) ? $_POST['contactnumber']:'';
// 	$data['deliverabledescription'] = isset($_POST['deliverabledescription']) ? $_POST['deliverabledescription']:'';
// 	$data['accuracyrequired'] = isset($_POST['accuracyrequired']) ? $_POST['accuracyrequired']:'';
	$data['Best-fit-alignment'] = isset($_POST['Best-fit-alignment']) ? 'yes': 'no';
	$data['RPS-alignment'] = isset($_POST['RPS-alignment']) ? 'yes': 'no';
	$data['Datum-alignment'] = isset($_POST['Datum-alignment']) ? 'yes': 'no';
	$data['3-2-1-alignment'] = isset($_POST['3-2-1-alignment']) ? 'yes': 'no';    
	$data['tolerancelimit'] = isset($_POST['tolerancelimit']) ? $_POST['tolerancelimit']:'';
	$data['2D-Comparison'] = isset($_POST['2D-Comparison']) ? 'yes': 'no';
	$data['3D-Comparison'] = isset($_POST['3D-Comparison']) ? 'yes': 'no';
	$data['Sheet-metal-Boundary-Comparison'] = isset($_POST['Sheet-metal-Boundary-Comparison']) ? 'yes': 'no';
    $data['Virtual-edge-comparison-measurment'] = isset($_POST['Virtual-edge-comparison-measurment']) ? 'yes': 'no';
    $data['Profile-projection-comparison'] = isset($_POST['Profile-projection-comparison']) ? 'yes': 'no';
    $data['Geometry-Deviation'] = isset($_POST['Geometry-Deviation']) ? 'yes': 'no';
    $data['3D-2D-Curve-Deviation'] = isset($_POST['3D-2D-Curve-Deviation']) ? 'yes': 'no';
    $data['Airfoil-Related-analysis-Airfoil-Twist'] = isset($_POST['Airfoil-Related-analysis-Airfoil-Twist']) ? 'yes': 'no';
    $data['pdf'] = isset($_POST['pdf']) ? 'yes': 'no';
    $data['pptx'] = isset($_POST['pptx']) ? 'yes': 'no';
    $data['xls'] = isset($_POST['xls']) ? 'yes': 'no';
    
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
//$to = "prasannakanthan@gmail.com";
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
	$mail->Password = "nctdxqoxvqhflyaj";                           
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