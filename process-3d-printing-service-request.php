<?php
header('Content-Type: application/json');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Parse .env file robustly
$envFile = __DIR__ . '/.env';
$smtpUser = 'netflixdemo270@gmail.com';
$smtpPass = 'rhnx exsi acot shmq';

if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value, ' "');
            if ($key === 'SMTP_USER') $smtpUser = $value;
            if ($key === 'SMTP_PASS') $smtpPass = $value;
        }
    }
}

$input = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

$fullName = isset($input['fullName']) ? $input['fullName'] : 'Customer';
$email = isset($input['emailAddress']) ? $input['emailAddress'] : 'No Email';
$company = isset($input['companyName']) ? $input['companyName'] : 'No Company';
$designation = isset($input['designation']) ? $input['designation'] : 'No Designation';
$mobile = isset($input['mobileNumber']) ? $input['mobileNumber'] : 'No Mobile';
$country = isset($input['country']) ? $input['country'] : 'No Country';
$city = isset($input['city']) ? $input['city'] : 'No City';

// Build elegant HTML Email Body
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f6f6fa; padding: 20px; }
    .container { max-width: 650px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    h2 { color: #ff931e; border-bottom: 2px solid #ff931e; padding-bottom: 10px; margin-top: 0; }
    .section-title { font-size: 18px; font-weight: bold; color: #333; margin-top: 25px; margin-bottom: 12px; background: #fff5e9; padding: 10px 15px; border-left: 4px solid #ff931e; border-radius: 4px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { padding: 12px 10px; border-bottom: 1px solid #eee; text-align: left; vertical-align: top; }
    th { width: 38%; color: #555; font-weight: 600; }
    td { width: 62%; font-weight: 500; color: #111; }
</style>
</head>
<body>
<div class="container">
    <h2>New 3D Printing Service Request</h2>
    <p>A new 3D printing service request has been submitted on Precise3DM. Here are the full details:</p>
    
    <div class="section-title">Step 1: Contact Information</div>
    <table>
        <tr><th>Full Name</th><td>' . htmlspecialchars($fullName) . '</td></tr>
        <tr><th>Company Name</th><td>' . htmlspecialchars($company) . '</td></tr>
        <tr><th>Designation</th><td>' . htmlspecialchars($designation) . '</td></tr>
        <tr><th>Email</th><td>' . htmlspecialchars($email) . '</td></tr>
        <tr><th>Mobile Number</th><td>' . htmlspecialchars($mobile) . '</td></tr>
        <tr><th>Country</th><td>' . htmlspecialchars($country) . '</td></tr>
        <tr><th>City</th><td>' . htmlspecialchars($city) . '</td></tr>
        <tr><th>Industry</th><td>' . htmlspecialchars(isset($input['industry']) ? $input['industry'] : 'N/A') . '</td></tr>
    </table>
    
    <div class="section-title">Step 2: Design Requirements</div>
    <table>
        <tr><th>Design Requirement</th><td>' . htmlspecialchars(isset($input['designRequirement']) ? $input['designRequirement'] : 'N/A') . '</td></tr>
        <tr><th>Uploaded Files</th><td>' . (!empty($_FILES['files']['name'][0]) ? count($_FILES['files']['name']) . ' file(s) attached to this email.' : 'No files uploaded.') . '</td></tr>
    </table>
    
    <div class="section-title">Step 3: Part Application & Assembly</div>
    <table>
        <tr><th>Part Applications</th><td>' . htmlspecialchars(isset($input['partApplications']) && $input['partApplications'] !== '' ? $input['partApplications'] : 'None selected') . '</td></tr>
        <tr><th>Approximate Part Size</th><td>' . htmlspecialchars(isset($input['partSize']) ? $input['partSize'] : 'N/A') . '</td></tr>
        <tr><th>Quantity Required</th><td>' . htmlspecialchars(isset($input['qtyReq']) ? $input['qtyReq'] : 'N/A') . '</td></tr>
        <tr><th>Need Assembly?</th><td>' . htmlspecialchars(isset($input['needAssembly']) ? $input['needAssembly'] : 'No') . '</td></tr>
    </table>
    
    <div class="section-title">Step 4: Material & Operating Temperature</div>
    <table>
        <tr><th>Material Requirements</th><td>' . htmlspecialchars(isset($input['materialRequirements']) && $input['materialRequirements'] !== '' ? $input['materialRequirements'] : 'None selected') . '</td></tr>
        <tr><th>Operating Temperature</th><td>' . htmlspecialchars(isset($input['operatingTemp']) ? $input['operatingTemp'] : 'N/A') . '</td></tr>
        <tr><th>Existing Material Used</th><td>' . htmlspecialchars(isset($input['existingMaterial']) && $input['existingMaterial'] !== '' ? $input['existingMaterial'] : 'None specified') . '</td></tr>
    </table>

    <div class="section-title">Step 5: Commercial Requirements</div>
    <table>
        <tr><th>Required Timeline</th><td>' . htmlspecialchars(isset($input['requiredTimeline']) ? $input['requiredTimeline'] : 'N/A') . '</td></tr>
        <tr><th>Budget Expectation (INR)</th><td>' . htmlspecialchars(isset($input['budgetExpectation']) ? $input['budgetExpectation'] : 'N/A') . '</td></tr>
        <tr><th>NDA Required?</th><td>' . htmlspecialchars(isset($input['needNDA']) ? $input['needNDA'] : 'No') . '</td></tr>
        <tr><th>Need Shipping?</th><td>' . htmlspecialchars(isset($input['needShipping']) ? $input['needShipping'] : 'No') . '</td></tr>
        <tr><th>Additional Notes / Instructions</th><td>' . htmlspecialchars(isset($input['customNotes']) && $input['customNotes'] !== '' ? $input['customNotes'] : 'None') . '</td></tr>
    </table>

    <div class="section-title">Step 6: Manufacturing Capabilities Selected</div>
    <table>
        <tr><th>Technologies Selected</th><td>' . htmlspecialchars(isset($input['selectedTechnologies']) && $input['selectedTechnologies'] !== '' ? $input['selectedTechnologies'] : 'None selected') . '</td></tr>
    </table>
    
    <br>
    <p style="text-align: center; color: #888; font-size: 12px;">This email was automatically generated from Precise3DM 3D Printing Service Request Form.</p>
</div>
</body>
</html>
';

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $smtpUser;
    $mail->FromName = "Precise3DM 3D Printing Service Request";
    $mail->addAddress('service@precise3dm.com'); // Send to admin
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $fullName);
    }

    $mail->isHTML(true);
    $mail->Subject = "New 3D Printing Service Request from " . $fullName;
    $mail->Body = $htmlBody;

    // Attach uploaded files
    if (!empty($_FILES['files']['name'][0])) {
        $fileCount = count($_FILES['files']['name']);
        for ($i = 0; $i < $fileCount; $i++) {
            if ($_FILES['files']['error'][$i] === UPLOAD_ERR_OK) {
                $tmpPath = $_FILES['files']['tmp_name'][$i];
                $fileName = $_FILES['files']['name'][$i];
                $mail->addAttachment($tmpPath, $fileName);
            }
        }
    }

    $mail->send();
    echo json_encode(['status' => 'success']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
}
