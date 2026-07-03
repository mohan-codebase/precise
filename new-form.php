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
    include "new-form.phtml";
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

	// Form Two
	$data['Structuredlight'] = isset($_POST['Structuredlight']) ? 'yes': 'no';
	$data['MetrologyGrade'] = isset($_POST['MetrologyGrade']) ? 'yes': 'no';
	$data['10to50Micron'] = isset($_POST['10to50Micron']) ? 'yes': 'no';
	$data['50to100Micron'] = isset($_POST['50to100Micron']) ? 'yes': 'no';
	$data['100-micron'] = isset($_POST['100-micron']) ? 'yes': 'no';
	$data['Myaccuracy'] = isset($_POST['Myaccuracy']) ? 'yes': 'no';
	$data['Imnot'] = isset($_POST['Imnot']) ? 'yes': 'no';
	$data['SpecificAccuracy'] = isset($_POST['SpecificAccuracy']) ? 'yes': 'no';
	$data['ComponentName'] = isset($_POST['ComponentName']) ? 'yes': 'no';

	// Form Three
	$data['checkbox1'] = isset($_POST['checkbox1']) ? 'yes': 'no';
	$data['checkbox2'] = isset($_POST['checkbox2']) ? 'yes': 'no';
	$data['checkbox3'] = isset($_POST['checkbox3']) ? 'yes': 'no';
	$data['checkbox4'] = isset($_POST['checkbox4']) ? 'yes': 'no';
	$data['checkbox5'] = isset($_POST['checkbox5']) ? 'yes': 'no';
	$data['checkbox6'] = isset($_POST['checkbox6']) ? 'yes': 'no';
	$data['checkbox7'] = isset($_POST['checkbox7']) ? 'yes': 'no';
	$data['checkbox8'] = isset($_POST['checkbox8']) ? 'yes': 'no';
	$data['checkbox9'] = isset($_POST['checkbox9']) ? 'yes': 'no';
	$data['checkbox10'] = isset($_POST['checkbox10']) ? 'yes': 'no';
	$data['checkbox11'] = isset($_POST['checkbox11']) ? 'yes': 'no';


	// Form Four
	$data['Engineering'] = isset($_POST['Engineering']) ? 'yes': 'no';
	$data['Inspection'] = isset($_POST['Inspection']) ? 'yes': 'no';
	$data['Scanning'] = isset($_POST['Scanning']) ? 'yes': 'no';
	$data['ComponentPickup1'] = isset($_POST['ComponentPickup1']) ? 'yes': 'no';
	$data['Locationdifferent'] = isset($_POST['Locationdifferent']) ? 'yes': 'no';
	$data['IfOnsite'] = isset($_POST['IfOnsite']) ? 'yes': 'no';
	$data['PreferredDate'] = isset($_POST['PreferredDate']) ? 'yes': 'no';

        // Form Five
	$data['form5-yes'] = isset($_POST['form5-yes']) ? 'yes': 'no';
	$data['form5-no'] = isset($_POST['form5-no']) ? 'yes': 'no';
	$data['Online'] = isset($_POST['Online']) ? 'yes': 'no';
	$data['Onsite'] = isset($_POST['Onsite']) ? 'yes': 'no';
	$data['form5-yes1'] = isset($_POST['form5-yes1']) ? 'yes': 'no';
	$data['form5-no1'] = isset($_POST['form5-no1']) ? 'yes': 'no';
	$data['inside-content'] = isset($_POST['inside-content']) ? 'yes': 'no';
	$data['inside-content1'] = isset($_POST['inside-content1']) ? 'yes': 'no';
	$data['checkbox9'] = isset($_POST['checkbox9']) ? 'yes': 'no';
	$data['checkbox10'] = isset($_POST['checkbox10']) ? 'yes': 'no';
	$data['checkbox11'] = isset($_POST['checkbox11']) ? 'yes': 'no';
    $data['form5-name'] = isset($_POST['form5-name']) ? $_POST['form5-name']:'';
	$data['form5-state'] = isset($_POST['form5-state']) ? $_POST['form5-state']:'';
	$data['form5-city'] = isset($_POST['form5-city']) ? $_POST['form5-city']:'';
	$data['form5-gst'] = isset($_POST['form5-gst']) ? $_POST['form5-gst']:'';
	
	
	$body = render_email('email', $data);

	$subject = "You have a message from your client from Book Demo Form";

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
	$mail->FromName = "Book Demo Form";

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
 header("Location: https://www.precise3dm.com/success-page.php");
//header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>