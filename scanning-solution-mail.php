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
function render_email($data) {
    ob_start();
    include "scanning-solution-email.phtml";
    return ob_get_contents();
}

if($_POST)
{
    $data = [];
    $data['full_name'] = isset($_POST['full_name']) ? $_POST['full_name']:'Not provided';
    $data['company_name'] = isset($_POST['company_name']) ? $_POST['company_name']:'Not provided';
    $data['designation'] = isset($_POST['designation']) ? $_POST['designation']:'Not provided';
    $data['business_email'] = isset($_POST['business_email']) ? $_POST['business_email']:'Not provided';
    $data['phone_code'] = isset($_POST['phone_code']) ? $_POST['phone_code']:'';
    $data['mobile_number'] = isset($_POST['mobile_number']) ? $_POST['mobile_number']:'Not provided';

    $data['usage'] = isset($_POST['usage']) && is_array($_POST['usage']) ? implode(', ', $_POST['usage']) : 'Not provided';
    $data['part_size'] = isset($_POST['part_size']) ? $_POST['part_size'] : 'Not provided';
    $data['accuracy'] = isset($_POST['accuracy']) ? $_POST['accuracy'] : 'Not provided';
    $data['process'] = isset($_POST['process']) ? $_POST['process'] : 'Not provided';
    
    $data['products'] = isset($_POST['product_interest']) && is_array($_POST['product_interest']) ? implode(', ', $_POST['product_interest']) : 'Not provided';
    $data['software'] = isset($_POST['software_interest']) && is_array($_POST['software_interest']) ? implode(', ', $_POST['software_interest']) : 'Not provided';

    $data['budget'] = isset($_POST['budget_range']) ? $_POST['budget_range'] : 'Not provided';
    $data['timeline'] = isset($_POST['purchase_timeline']) ? $_POST['purchase_timeline'] : 'Not provided';
    $data['stage'] = isset($_POST['decision_stage']) ? $_POST['decision_stage'] : 'Not provided';
    $data['additional_notes'] = isset($_POST['additional_notes']) && !empty($_POST['additional_notes']) ? $_POST['additional_notes'] : 'None';

    $data['upload_links'] = [];

    /*Upload Function*/
    if(isset($_FILES['uploadscan'])) {
        $folder = "scanning_solution_uploads";
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        // Check if multiple files
        if(is_array($_FILES['uploadscan']['name'])) {
            $totalFiles = count($_FILES['uploadscan']['name']);
            for($i = 0; $i < $totalFiles; $i++) {
                if($_FILES['uploadscan']['size'][$i] > 0) {
                    $filename = uniqid() . "-" . time();
                    $extension = pathinfo($_FILES["uploadscan"]["name"][$i], PATHINFO_EXTENSION);
                    $finalFilename = $filename.".".$extension;
                    
                    move_uploaded_file($_FILES["uploadscan"]["tmp_name"][$i], $folder."/".$finalFilename);
                    $data['upload_links'][] = "https://precise3dm.com"."/".$folder."/".$finalFilename;
                }
            }
        } else {
             if($_FILES['uploadscan']['size'] > 0) {
                $filename = uniqid() . "-" . time();
                $extension = pathinfo($_FILES["uploadscan"]["name"], PATHINFO_EXTENSION);
                $finalFilename = $filename.".".$extension;
                
                move_uploaded_file($_FILES["uploadscan"]["tmp_name"], $folder."/".$finalFilename);
                $data['upload_links'][] = "https://precise3dm.com"."/".$folder."/".$finalFilename;
             }
        }
    }

    $body = render_email($data);

    $subject = "New 3D Scanning Solution Request from " . $data['full_name'];
    
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
    $mail->FromName = "3D Scanning Form Submission";

    $mail->addAddress($to);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        $_SESSION['status'] = "success";
        header("Location: success-page.php");
        exit;
    } catch (Exception $e) {
        $_SESSION['status'] = "failure";
        echo "Error: Message not accepted. Mailer Error: {$mail->ErrorInfo}";
        exit;
    }
}
header("Location: scanning-solution-form.php");
exit;
?>
