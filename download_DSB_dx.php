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
    ?>
    <html>
    <body>
        <h2>Brochure Download Request - Geomagic Design X</h2>
        <p><strong>Name:</strong> <?php echo $data['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $data['email']; ?></p>
        <p><strong>Contact Number:</strong> <?php echo $data['contactnumber']; ?></p>
        <p><strong>Software:</strong> Geomagic Design X</p>
    </body>
    </html>
    <?php
    return ob_get_clean();
}

if($_POST)
{
	$data['name'] = isset($_POST['name_pop']) ? $_POST['name_pop']:'';
	$data['email'] = isset($_POST['email_pop']) ? $_POST['email_pop']:'';
	$data['contactnumber'] = isset($_POST['contactnumber_pop']) ? $_POST['contactnumber_pop']:'';
	$body = render_email('email', $data);

	$subject = "Brochure Download Request: Geomagic Design X - Client: " . $data['name'];

	$to = "service@precise3dm.com";
	$from = "precise3dmdre@gmail.com";

	//PHPMailer Object
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
	$mail->FromName = "Precise3DM Website - Geomagic Design X";

	$mail->addAddress($to); 

	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body = $body;

    try {
        $mail->send();
        $_SESSION['status'] = "success";
    } catch (Exception $e) {
        $_SESSION['status'] = "failure";
    }
}
header("Location: " . $_SERVER['HTTP_REFERER'] . "#brochure-download-status");
exit;
?>
