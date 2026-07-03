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
    include "3d-usa-onsite-scan-email-template.phtml";
    return ob_get_contents();
}

if($_POST)
{
	$data['name'] = isset($_POST['name']) ? $_POST['name']:'';
	$data['email'] = isset($_POST['email']) ? $_POST['email']:'';
	$data['companyname'] = isset($_POST['companyname']) ? $_POST['companyname']:'';
	$data['contactnumber'] = isset($_POST['contactnumber']) ? $_POST['contactnumber']:'';
	$data['address'] = isset($_POST['address']) ? $_POST['address']:'';
	$data['city'] = isset($_POST['city']) ? $_POST['city']:'';
	$data['state'] = isset($_POST['state']) ? $_POST['state']:'';
	
// 	$data['deliverabledescription'] = isset($_POST['deliverabledescription']) ? $_POST['deliverabledescription']:'';
// 	$data['accuracyrequired'] = isset($_POST['accuracyrequired']) ? $_POST['accuracyrequired']:'';
	$data['1mm-to-100-mm'] = isset($_POST['1mm-to-100-mm']) ? 'yes': 'no';
	$data['100-mm-to-500-mm'] = isset($_POST['100-mm-to-500-mm']) ? 'yes': 'no';
	$data['500-mm-to-1000-mm'] = isset($_POST['500-mm-to-1000-mm']) ? 'yes': 'no';
	$data['1000mm-to-5000-mm'] = isset($_POST['1000mm-to-5000-mm']) ? 'yes': 'no';    
	$data['Large-Objects-and-environments-such-as-factories-ships-and-aircrafts'] = isset($_POST['Large-Objects-and-environments-such-as-factories-ships-and-aircrafts']) ? 'yes': 'no';  
	
	
	$data['10-to-50-Micron-010-mm-to-050-mm'] = isset($_POST['10-to-50-Micron-010-mm-to-050-mm']) ? 'yes': 'no';
	$data['50-to-100-Micron-010-mm-to-050-mm'] = isset($_POST['50-to-100-Micron-010-mm-to-050-mm']) ? 'yes': 'no';
	$data['Above-100-micron-1-mm'] = isset($_POST['Above-100-micron-1-mm']) ? 'yes': 'no';
    $data['I-am-not-sure'] = isset($_POST['I-am-not-sure']) ? 'yes': 'no';
    $data['ownmesare1'] = isset($_POST['ownmesare1']) ? $_POST['ownmesare1']:'';
	$data['ownmesare2'] = isset($_POST['ownmesare2']) ? $_POST['ownmesare2']:'';
    
    
    $data['Optical-3d-scanner-Gom-and-SolutioniX-3d-Scanner'] = isset($_POST['Optical-3d-scanner-Gom-and-SolutioniX-3d-Scanner']) ? 'yes': 'no';
    $data['Handheld-Metrology-3d-scanner-Freescan-UE7'] = isset($_POST['Handheld-Metrology-3d-scanner-Freescan-UE7']) ? 'yes': 'no';
    $data['Cost-effective-Multiutility-3D-scanner-Handheld-Tripod'] = isset($_POST['Cost-effective-Multiutility-3D-scanner-Handheld-Tripod']) ? 'yes': 'no';
    $data['Long-range-Laser-3D-scanner-Faro-Focus'] = isset($_POST['Long-range-Laser-3D-scanner-Faro-Focus']) ? 'yes': 'no';
	$data['message1'] = isset($_POST['message1']) ? $_POST['message1']:'';
    $data['Others-Please-mention'] = isset($_POST['Others-Please-mention']) ? 'yes': 'no';
    $data['Just-3d-scanning-Point-Cloud-or-STL-files'] = isset($_POST['Just-3d-scanning-Point-Cloud-or-STL-files']) ? 'yes': 'no';
    $data['3D-Scan-to-CAD'] = isset($_POST['3D-Scan-to-CAD']) ? 'yes': 'no';
    $data['3D-Inspection'] = isset($_POST['3D-Inspection']) ? 'yes': 'no';
	$data['message2'] = isset($_POST['message2']) ? $_POST['message2']:'';
    
	$data[' your-location '] = isset($_POST[' your-location ']) ? 'yes': 'no';
    $data['nearby-location'] = isset($_POST['nearby-location']) ? 'yes': 'no';
    $data['my-location'] = isset($_POST['my-location']) ? 'yes': 'no';
    $data['Not-sure'] = isset($_POST['Not-sure']) ? 'yes': 'no';
	$data['message3'] = isset($_POST['message3']) ? $_POST['message3']:'';
	
    $data['Same-as-Company-address'] = isset($_POST['Same-as-Company-address']) ? 'yes': 'no';
    $data['Please-mention-the-address'] = isset($_POST['Please-mention-the-address']) ? 'yes': 'no';
    $data['Address'] = isset($_POST['Address']) ? $_POST['Address']:'';
    $data['city'] = isset($_POST['city']) ? $_POST['city']:'';
    $data['State'] = isset($_POST['State']) ? $_POST['State']:'';
	$data['pincode'] = isset($_POST['pincode']) ? $_POST['pincode']:'';
    
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

	$subject = "USA Form Page";

	$to = "marketing@precise3dm.com";
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
	$mail->FromName = "USA Form Page Submission";

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