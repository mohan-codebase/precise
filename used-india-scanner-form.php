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
	include "used-india-scanner.phtml";
	return ob_get_contents();
}

if ($_POST) {
	// Form one
	$data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
	$data['number'] = isset($_POST['number']) ? $_POST['number'] : '';
	$data['company'] = isset($_POST['company']) ? $_POST['company'] : '';
	// Form Two
	$data['brand'] = isset($_POST['brand']) ? $_POST['brand'] : '';
	$data['model'] = isset($_POST['model']) ? $_POST['model'] : '';
	$data['new'] = isset($_POST['new']) ? 'yes' : 'no';
	$data['likenew'] = isset($_POST['likenew']) ? 'yes' : 'no';
	$data['good'] = isset($_POST['good']) ? 'yes' : 'no';
	$data['fair'] = isset($_POST['fair']) ? 'yes' : 'no';
	$data['poor'] = isset($_POST['poor']) ? 'yes' : 'no';
	$data['age'] = isset($_POST['age']) ? $_POST['age'] : '';
	$data['reason'] = isset($_POST['reason']) ? $_POST['reason'] : '';

	// Form Three
	$data['accuracy'] = isset($_POST['accuracy']) ? $_POST['accuracy'] : '';
	$data['resolution'] = isset($_POST['resolution']) ? $_POST['resolution'] : '';
	$data['technology'] = isset($_POST['technology']) ? $_POST['technology'] : '';
	$data['maximum'] = isset($_POST['maximum']) ? $_POST['maximum'] : '';
	$data['software'] = isset($_POST['software']) ? $_POST['software'] : '';
	$data['accessories'] = isset($_POST['accessories']) ? $_POST['accessories'] : '';

	// Form Five
	$data['price'] = isset($_POST['price']) ? $_POST['price'] : '';
	$data['form5yes'] = isset($_POST['form5yes']) ? 'yes' : 'no';
	$data['form5like'] = isset($_POST['form5like']) ? 'yes' : 'no';

	// Form Six
	$data['Description'] = isset($_POST['Description']) ? $_POST['Description'] : '';
	$data['Terms'] = isset($_POST['Terms']) ? $_POST['Terms'] : '';


	// Form Seven
	$data['bot-box'] = isset($_POST['bot-box']) ? 'yes' : 'no';

	$data['upload_image'] = '';

	/*Upload Function*/
	if (isset($_FILES['uploadfile']) && $_FILES['uploadfile']['size'] > 0) {


		$uploadfile_name = $_FILES["uploadfile"]["name"];

		$filename = uniqid() . "-" . time();

		$extension = pathinfo($_FILES["uploadfile"]["name"], PATHINFO_EXTENSION);

		$filename = $filename . "." . $extension;

		$folder = "india-service";

		if (!is_dir($folder)) {
			mkdir($folder, 0777, true);
		}

		move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $folder . "/" . $filename);

		$data['upload_image'] = "https://precise3dm.com" . "/" . $folder . "/" . $filename;
	}



	$data['upload_link'] = '';

	/*Upload Function*/
	if (isset($_FILES['uploadimage']) && $_FILES['uploadimage']['size'] > 0) {


		$uploadfile_name = $_FILES["uploadimage"]["name"];

		$filename = uniqid() . "-" . time();

		$extension = pathinfo($_FILES["uploadimage"]["name"], PATHINFO_EXTENSION);

		$filename = $filename . "." . $extension;

		$folder = "india-service";

		if (!is_dir($folder)) {
			mkdir($folder, 0777, true);
		}

		move_uploaded_file($_FILES["uploadimage"]["tmp_name"], $folder . "/" . $filename);

		$data['upload_link'] = "https://precise3dm.com" . "/" . $folder . "/" . $filename;
	}

	$body = render_email('email', $data);

	$subject = "You have a message from your client from Buy and Sell Used 3D Scanners in India";

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
	$mail->FromName = "Buy and Sell Used 3D Scanners in India details";

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
header("Location: https://www.precise3dm.com/buy-sell-scanner-thankyou.php");
//header("Location: ". $_SERVER['HTTP_REFERER']);
exit;
?>