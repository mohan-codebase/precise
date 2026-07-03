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
    include "main-contact-us-mail.phtml";
    return ob_get_contents();
}

if($_POST)
{
	// Form one
	$data['name'] = isset($_POST['name']) ? $_POST['name']:'';
	$data['email'] = isset($_POST['email']) ? $_POST['email']:'';
	$data['company'] = isset($_POST['company']) ? $_POST['company']:'';
	$data['phone'] = isset($_POST['phone']) ? $_POST['phone']:'';
	$data['address'] = isset($_POST['address']) ? $_POST['address']:'';
	$data['state1'] = isset($_POST['state1']) ? $_POST['state1']:'';
	$data['city1'] = isset($_POST['city1']) ? $_POST['city1']:'';
	$data['country1'] = isset($_POST['country1']) ? $_POST['country1']:'';
	$data['pin'] = isset($_POST['pin']) ? $_POST['pin']:'';
	$data['gst'] = isset($_POST['gst']) ? $_POST['gst']:'';
	
	// Form Two
	$data['10to50Micron'] = isset($_POST['10to50Micron']) ? 'yes': 'no';
	$data['50to100Micron'] = isset($_POST['50to100Micron']) ? 'yes': 'no';
	$data['100-micron'] = isset($_POST['100-micron']) ? 'yes': 'no';
	$data['Myaccuracy'] = isset($_POST['Myaccuracy']) ? 'yes': 'no';
	$data['Imnot'] = isset($_POST['Imnot']) ? 'yes': 'no';
	$data['SpecificAccuracy'] = isset($_POST['SpecificAccuracy']) ? $_POST['SpecificAccuracy']:'';
	$data['ComponentName'] = isset($_POST['ComponentName']) ? $_POST['ComponentName']:'';
	$data['ComponentSize'] = isset($_POST['ComponentSize']) ? $_POST['ComponentSize']:'';

	// Form Three
	$data['Structuredlight'] = isset($_POST['Structuredlight']) ? 'yes': 'no';
	$data['Handheld3D'] = isset($_POST['Handheld3D']) ? 'yes': 'no';
	$data['Smallobject'] = isset($_POST['Smallobject']) ? 'yes': 'no';
	$data['LaserArm-Based'] = isset($_POST['LaserArm-Based']) ? 'yes': 'no';
	$data['needConsultation'] = isset($_POST['needConsultation']) ? 'yes': 'no';

	// Form Four
	$data['OnsiteLocation'] = isset($_POST['OnsiteLocation']) ? 'yes': 'no';
	$data['Walkinat'] = isset($_POST['Walkinat']) ? 'yes': 'no';
	$data['ComponentPickup'] = isset($_POST['ComponentPickup']) ? 'yes': 'no';
	$data['ComponentPickup1'] = isset($_POST['ComponentPickup1']) ? 'yes': 'no';
	$data['Locationdifferent'] = isset($_POST['Locationdifferent']) ? $_POST['Locationdifferent']:'';
	$data['IfOnsite'] = isset($_POST['IfOnsite']) ? 'yes': 'no';
	$data['PreferredDate'] = isset($_POST['PreferredDate']) ? $_POST['PreferredDate']:'';
	$data['click1'] = isset($_POST['click1']) ? 'yes': 'no';
	$data['check-box0'] = isset($_POST['check-box0']) ? 'yes': 'no';
	$data['Address-4'] = isset($_POST['Address-4']) ? $_POST['Address-4']:'';
	$data['country2'] = isset($_POST['country2']) ? $_POST['country2']:'';
	$data['state2'] = isset($_POST['state2']) ? $_POST['state2']:'';
	$data['city2'] = isset($_POST['city2']) ? $_POST['city2']:'';
	$data['box1'] = isset($_POST['box1']) ? 'yes': 'no';
	$data['box3'] = isset($_POST['box3']) ? 'yes': 'no';
	$data['check-box01'] = isset($_POST['check-box01']) ? 'yes': 'no';
	$data['Address-5'] = isset($_POST['Address-5']) ? $_POST['Address-5']:'';
	$data['country3'] = isset($_POST['country3']) ? $_POST['country3']:'';
	$data['state3'] = isset($_POST['state3']) ? $_POST['state3']:'';
	$data['city3'] = isset($_POST['city3']) ? $_POST['city3']:'';
	$data['box7'] = isset($_POST['box7']) ? 'yes': 'no';
	$data['cunt12'] = isset($_POST['cunt12']) ? $_POST['cunt12']:'';
	$data['State12'] = isset($_POST['State12']) ? $_POST['State12']:'';
	$data['city12'] = isset($_POST['city12']) ? $_POST['city12']:'';
	
	// Form Five
	$data['Engineering'] = isset($_POST['Engineering']) ? 'yes': 'no';
	$data['Inspection'] = isset($_POST['Inspection']) ? 'yes': 'no';
	$data['Scanning'] = isset($_POST['Scanning']) ? 'yes': 'no';
	
	// Form Five-one
	$data['DesignIntent'] = isset($_POST['DesignIntent']) ? 'yes': 'no';
	$data['As-built'] = isset($_POST['As-built']) ? 'yes': 'no';
	$data['Notsure'] = isset($_POST['Notsure']) ? 'yes': 'no';
	$data['IGESSTEP'] = isset($_POST['IGESSTEP']) ? 'yes': 'no';
	$data['softwareOutput'] = isset($_POST['softwareOutput']) ? 'yes': 'no';
	$data['CATIA'] = isset($_POST['CATIA']) ? 'yes': 'no';
	$data['UG'] = isset($_POST['UG']) ? 'yes': 'no';
	$data['Creo'] = isset($_POST['Creo']) ? 'yes': 'no';
	$data['Autodesk'] = isset($_POST['Autodesk']) ? 'yes': 'no';
	$data['Solidworks'] = isset($_POST['Solidworks']) ? 'yes': 'no';
	$data['Others'] = isset($_POST['Others']) ? 'yes': 'no';

	// Form Five-Two
	$data['Yes'] = isset($_POST['Yes']) ? 'yes': 'no';
	$data['No'] = isset($_POST['No']) ? 'yes': 'no';
	$data['BestFit'] = isset($_POST['BestFit']) ? 'yes': 'no';
	$data['Feature-based'] = isset($_POST['Feature-based']) ? 'yes': 'no';
	$data['RPS'] = isset($_POST['RPS']) ? 'yes': 'no';
	$data['NotSure'] = isset($_POST['NotSure']) ? 'yes': 'no';
	$data['Specificalignment'] = isset($_POST['Specificalignment']) ? $_POST['Specificalignment']:'';
	$data['InspectionCriteria'] = isset($_POST['InspectionCriteria']) ? $_POST['InspectionCriteria']:'';
	$data['provideadditional'] = isset($_POST['provideadditional']) ? $_POST['provideadditional']:'';
	$data['2DCompare'] = isset($_POST['2DCompare']) ? 'yes': 'no';
	$data['3DCompare'] = isset($_POST['3DCompare']) ? 'yes': 'no';
	$data['2DDimension'] = isset($_POST['2DDimension']) ? 'yes': 'no';
	$data['3DDimension'] = isset($_POST['3DDimension']) ? 'yes': 'no';
	$data['WallThickness'] = isset($_POST['WallThickness']) ? 'yes': 'no';
	$data['Boundary'] = isset($_POST['Boundary']) ? 'yes': 'no';
	$data['Others1'] = isset($_POST['Others1']) ? $_POST['Others1']:'';
	$data['PPT'] = isset($_POST['PPT']) ? 'yes': 'no';
	$data['PDF'] = isset($_POST['PDF']) ? 'yes': 'no';
	$data['3DPDF'] = isset($_POST['3DPDF']) ? 'yes': 'no';
	$data['XLSX'] = isset($_POST['XLSX']) ? 'yes': 'no';
	$data['Others2'] = isset($_POST['Others2']) ? $_POST['Others2']:'';

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

	$subject = "You have a message from your client from contact us";

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
	$mail->FromName = "contact us details";

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
 header("Location: https://www.precise3dm.com/mail-success.php");
//header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>