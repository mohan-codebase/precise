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
	include "3D-Scanning-Service-form.phtml";
	return ob_get_contents();
}

if ($_POST) {
	// Form one
	$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
	$data['company'] = isset($_POST['company']) ? $_POST['company'] : '';
	$data['phone'] = isset($_POST['phone']) ? $_POST['phone'] : '';
	$data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
	$data['state1'] = isset($_POST['state1']) ? $_POST['state1'] : '';
	$data['city1'] = isset($_POST['city1']) ? $_POST['city1'] : '';
	$data['country1'] = isset($_POST['country1']) ? $_POST['country1'] : '';
	$data['GST'] = isset($_POST['GST']) ? $_POST['GST'] : '';

	// Form two
	$data['checkbox1'] = isset($_POST['checkbox1']) ? 'yes' : 'no';
	$data['checkbox2'] = isset($_POST['checkbox2']) ? 'yes' : 'no';
	$data['checkbox3'] = isset($_POST['checkbox3']) ? 'yes' : 'no';
	$data['checkbox4'] = isset($_POST['checkbox4']) ? 'yes' : 'no';
	$data['checkbox5'] = isset($_POST['checkbox5']) ? 'yes' : 'no';
	$data['checkbox6'] = isset($_POST['checkbox6']) ? 'yes' : 'no';
	$data['checkbox7'] = isset($_POST['checkbox7']) ? $_POST['checkbox7'] : '';
	$data['checkbox8'] = isset($_POST['checkbox8']) ? $_POST['checkbox8'] : '';
	$data['checkbox9'] = isset($_POST['checkbox9']) ? $_POST['checkbox9'] : '';


	// Form three
	$data['Structuredlight'] = isset($_POST['Structuredlight']) ? 'yes' : 'no';
	$data['MetrologyGrade'] = isset($_POST['MetrologyGrade']) ? 'yes' : 'no';
	$data['10to50Micron'] = isset($_POST['10to50Micron']) ? 'yes' : 'no';
	$data['50to100Micron'] = isset($_POST['50to100Micron']) ? 'yes' : 'no';
	$data['100-micron'] = isset($_POST['100-micron']) ? 'yes' : 'no';
	$data['Myaccuracy'] = isset($_POST['Myaccuracy']) ? 'yes' : 'no';
	$data['Imnot'] = isset($_POST['Imnot']) ? 'yes' : 'no';
	$data['SpecificAccuracy'] = isset($_POST['SpecificAccuracy']) ? 'yes' : 'no';
	$data['ComponentName'] = isset($_POST['ComponentName']) ? 'yes' : 'no';



	// Form Four
	$data['Engineering'] = isset($_POST['Engineering']) ? 'yes' : 'no';
	$data['Inspection'] = isset($_POST['Inspection']) ? 'yes' : 'no';
	$data['Scanning'] = isset($_POST['Scanning']) ? 'yes' : 'no';
	$data['ComponentPickup1'] = isset($_POST['ComponentPickup1']) ? 'yes' : 'no';
	
// Form Five
$data['Reverse'] = isset($_POST['Reverse']) ? 'yes' : 'no';
$data['Inspection1'] = isset($_POST['Inspection1']) ? 'yes' : 'no';
$data['Just'] = isset($_POST['Just']) ? 'yes' : 'no';

// Form Six
$data['Intent'] = isset($_POST['Intent']) ? 'yes' : 'no';
$data['built'] = isset($_POST['built']) ? 'yes' : 'no';
$data['Hybrid'] = isset($_POST['Hybrid']) ? 'yes' : 'no';
$data['Nurbs'] = isset($_POST['Nurbs']) ? 'yes' : 'no';
$data['Class'] = isset($_POST['Class']) ? 'yes' : 'no';
$data['consultation'] = isset($_POST['consultation']) ? 'yes' : 'no';
$data['IGES'] = isset($_POST['IGES']) ? 'yes' : 'no';
$data['CATIA'] = isset($_POST['CATIA']) ? 'yes' : 'no';
$data['UG'] = isset($_POST['UG']) ? 'yes' : 'no';
$data['Creo'] = isset($_POST['Creo']) ? 'yes' : 'no';
$data['Autodesk'] = isset($_POST['Autodesk']) ? 'yes' : 'no';
$data['Solidworks'] = isset($_POST['Solidworks']) ? 'yes' : 'no';
$data['others'] = isset($_POST['others']) ? 'yes' : 'no';


// Form seven
$data['Modelyes'] = isset($_POST['Modelyes']) ? 'yes' : 'no';
$data['Modelno'] = isset($_POST['Modelno']) ? 'yes' : 'no';
$data['Best'] = isset($_POST['Best']) ? 'yes' : 'no';
$data['Feature-based'] = isset($_POST['Feature-based']) ? 'yes' : 'no';
$data['RPS'] = isset($_POST['RPS']) ? 'yes' : 'no';
$data['Not-Sure'] = isset($_POST['Not-Sure']) ? 'yes' : 'no';
$data['Specific-alignment'] = isset($_POST['Specific-alignment']) ? $_POST['Specific-alignment'] : '';
$data['Tolerances'] = isset($_POST['Tolerances']) ? $_POST['Tolerances'] : '';
$data['additional-details'] = isset($_POST['additional-details']) ? $_POST['additional-details'] : '';
$data['2D-Compare'] = isset($_POST['2D-Compare']) ? 'yes' : 'no';
$data['3D-Compare'] = isset($_POST['3D-Compare']) ? 'yes' : 'no';
$data['Sheet-metal'] = isset($_POST['Sheet-metal']) ? 'yes' : 'no';
$data['Virtual'] = isset($_POST['Virtual']) ? 'yes' : 'no';
$data['projection'] = isset($_POST['projection']) ? 'yes' : 'no';
$data['Curve'] = isset($_POST['Curve']) ? 'yes' : 'no';
$data['Airfoil'] = isset($_POST['Airfoil']) ? 'yes' : 'no';
$data['Others'] = isset($_POST['Others']) ? $_POST['Others'] : '';
$data['PowerPoint'] = isset($_POST['PowerPoint']) ? 'yes' : 'no';
$data['.PDF'] = isset($_POST['.PDF']) ? 'yes' : 'no';
$data['.3D PDF'] = isset($_POST['.3D PDF']) ? 'yes' : 'no';
$data['XLSX'] = isset($_POST['XLSX']) ? 'yes' : 'no';
$data['Others1'] = isset($_POST['Others1']) ? $_POST['Others1'] : '';


$data['upload_link'] = '';

	/*Upload Function*/
	if(isset($_FILES['uploadscan']) && $_FILES['uploadscan']['size'] > 0)
	{
	   

	  $uploadfile_name=$_FILES["uploadscan"]["name"];

	  $filename   = uniqid() . "-" . time();

	  $extension  = pathinfo( $_FILES["uploadscan"]["name"], PATHINFO_EXTENSION );

	  $filename = $filename . "." . $extension;

	  $folder="chennai_services";

  		if (!is_dir($folder)) {
    		mkdir($folder, 0777, true);
		}

	  move_uploaded_file($_FILES["uploadscan"]["tmp_name"], $folder."/".$filename);

	  $data['upload_link'] = "https://precise3dm.com". "/" .$folder . "/" .$filename;
	}




	$body = render_email('email', $data);

	$subject = "You have a message from your client from 3D scanning service form";

	$to = "marketing@precise3dm.com";
    //$to = "prasannakanthan@gmail.com";
	$from = "marketing@precise3dm.com";


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
	$mail->FromName = "3D Scanning Service Project";

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
header("Location: https://www.precise3dm.com/success-page1.php");
//header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>