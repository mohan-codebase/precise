<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Start output buffering to prevent header errors
ob_start();

// Load PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and collect form data
    $exclusive = isset($_POST['exclusive']) ? implode(', ', (array)$_POST['exclusive']) : 'None Selected';
    $name = $_POST['name'] ?? '';
    $company = $_POST['company'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $country = $_POST['country1'] ?? '';
    $state = $_POST['state1'] ?? '';
    $city = $_POST['City1'] ?? '';
    $gst = $_POST['gst'] ?? '';
    $software_interest = $_POST['radio-value'] ?? '';
    $scanner_inhouse = $_POST['house'] ?? '';
    $scanner_details = $_POST['yes-text'] ?? '';
    $demo_required = $_POST['demo'] ?? '';
    $download_option = $_POST['quote'] ?? '';
    $schedule = $_POST['schedule'] ?? '';

    // Calendly Link
    $calendlyLink = 'https://calendly.com/santhosh007/30min?hide_event_type_details=1&hide_gdpr_banner=1';
    $calendlySection = '';
    if (!empty($schedule)) {
        $calendlySection = "<p><strong>Calendly Meeting Link:</strong> <a href='$calendlyLink' target='_blank'>$calendlyLink</a></p>";
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2; // Debug output (disable in production)
    $mail->Debugoutput = 'html';

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'precise3dmdre@gmail.com';
        $mail->Password = 'nctdxqoxvqhflyaj'; // App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('precise3dmdre@gmail.com', 'Your Name');
        $mail->addAddress('precise3dmdre@gmail.com', 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Software Inquiry Form Submission';
        $mail->Body = "
        <h2>Software Inquiry Form Submission</h2>
        <table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
            <tr><th align='left'>Selected Options</th><td>" . (!empty($exclusive) ? $exclusive : 'N/A') . "</td></tr>
            <tr><th align='left'>Full Name</th><td>" . (!empty($name) ? $name : 'N/A') . "</td></tr>
            <tr><th align='left'>Company</th><td>" . (!empty($company) ? $company : 'N/A') . "</td></tr>
            <tr><th align='left'>Email</th><td>" . (!empty($email) ? $email : 'N/A') . "</td></tr>
            <tr><th align='left'>Phone</th><td>" . (!empty($phone) ? $phone : 'N/A') . "</td></tr>
            <tr><th align='left'>Address</th><td>" . (!empty($address) ? $address : 'N/A') . "</td></tr>
            <tr><th align='left'>Country</th><td>" . (!empty($country) ? $country : 'N/A') . "</td></tr>
            <tr><th align='left'>State</th><td>" . (!empty($state) ? $state : 'N/A') . "</td></tr>
            <tr><th align='left'>City</th><td>" . (!empty($city) ? $city : 'N/A') . "</td></tr>
            <tr><th align='left'>GST Number</th><td>" . (!empty($gst) ? $gst : 'N/A') . "</td></tr>
            <tr><th align='left'>Software Interest</th><td>" . (!empty($software_interest) ? $software_interest : 'N/A') . "</td></tr>
            <tr><th align='left'>3D Scanner in-house</th><td>" . (!empty($scanner_inhouse) ? $scanner_inhouse : 'N/A') . "</td></tr>
            <tr><th align='left'>If yes, Scanner Brand/Model</th><td>" . (!empty($scanner_details) ? $scanner_details : 'N/A') . "</td></tr>
            <tr><th align='left'>Need Demo Before Purchase?</th><td>" . (!empty($demo_required) ? $demo_required : 'N/A') . "</td></tr>
            <tr><th align='left'>Download Option</th><td>" . (!empty($download_option) ? $download_option : 'N/A') . "</td></tr>
            <tr><th align='left'>Demo Schedule Preference</th><td>" . (!empty($schedule) ? $schedule : 'N/A') . "</td></tr>
        </table>
        ";


        // Determine the redirect URL based on the selected options
        $redirectUrl = 'thankyou-software.php'; // Default URL

        // Check for software interest and download options
        if ($software_interest === 'Geomagic Design X Go' || $software_interest === 'Geomagic Design X Professional' || $software_interest === 'Geomagic Design X Plus') {
            if ($download_option === 'Direct Download') {
                $redirectUrl = 'https://drive.google.com/file/d/1vm_ZdnhCZGtQc_XOu_7QI3L5eAWxtx5-/view?usp=sharing';
            }
        } else if ($software_interest === 'Geomagic Control X' || $software_interest === 'Geomagic Control X Essential') {
            if ($download_option === 'Direct Download') {
                $redirectUrl = 'https://drive.google.com/file/d/1jzBLN2ERmJdvpXnDCYVniFsMFFwoa5ge/view?usp=sharing';
            }
        } else if ($software_interest === 'Geomagic for SOLIDWORKS') {
            if ($download_option === 'Direct Download') {
                $redirectUrl = 'https://drive.google.com/file/d/1bMsOGfl1PBLLxW4N8O_0gj98i25N363U/view?usp=sharing'; // Dummy link for SOLIDWORKS
            }
        } else {
            // Fallback case for Request Download Link by Email
            if ($download_option === 'Request Download Link by Email') {
                $redirectUrl = 'thankyou-software.php'; // Redirect to thank you page
            }
        }
        

        // Send the email
        $mail->send();

        // Redirect to the appropriate URL
        header("Location: $redirectUrl");
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// End output buffering and flush any output to avoid "headers already sent" error
ob_end_flush();
?>
