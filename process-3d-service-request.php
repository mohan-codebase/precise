<?php
header('Content-Type: application/json');

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Parse .env file robustly
$envFile = __DIR__ . '/.env';
$smtpUser = 'precise3dmdre@gmail.com';
$smtpPass = 'nctdxqoxvqhflyaj';

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

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

$name = isset($input['name']) ? $input['name'] : 'Customer';
$email = isset($input['email']) ? $input['email'] : 'No Email';
$company = isset($input['company']) ? $input['company'] : 'No Company';
$mobile = isset($input['mobile']) ? $input['mobile'] : 'No Mobile';
$location = isset($input['location']) ? $input['location'] : 'No Location';

// Build elegant HTML Email Body
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f6f6fa; padding: 20px; }
    .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 25px; border-radius: 12px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    h2 { color: #ff931e; border-bottom: 2px solid #ff931e; padding-bottom: 10px; margin-top: 0; }
    .section-title { font-size: 18px; font-weight: bold; color: #333; margin-top: 20px; margin-bottom: 10px; background: #fff5e9; padding: 10px; border-left: 4px solid #ff931e; border-radius: 4px; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { padding: 10px; border-bottom: 1px solid #eee; text-align: left; vertical-align: top; }
    th { width: 35%; color: #555; }
    td { width: 65%; font-weight: 500; }
</style>
</head>
<body>
<div class="container">
    <h2>New 3D Service Request</h2>
    <p>A new service request has been submitted on Precise3DM. Here are the full details:</p>
    
    <div class="section-title">Your Details</div>
    <table>
        <tr><th>Name</th><td>' . htmlspecialchars($name) . '</td></tr>
        <tr><th>Company</th><td>' . htmlspecialchars($company) . '</td></tr>
        <tr><th>Mobile</th><td>' . htmlspecialchars($mobile) . '</td></tr>
        <tr><th>Email</th><td>' . htmlspecialchars($email) . '</td></tr>
        <tr><th>Location</th><td>' . htmlspecialchars($location) . '</td></tr>
    </table>
    
    <div class="section-title">Project Summary</div>
    <table>
        <tr><th>Part / Project Name</th><td>' . htmlspecialchars(isset($input['projectName']) ? $input['projectName'] : '') . '</td></tr>
        <tr><th>Object Size</th><td>' . htmlspecialchars(isset($input['objectSize']) ? $input['objectSize'] : '') . '</td></tr>
        <tr><th>Dimensions (L×W×H)</th><td>' . htmlspecialchars(isset($input['dimensions']) ? $input['dimensions'] : '') . '</td></tr>
        <tr><th>Required Accuracy</th><td>' . htmlspecialchars(isset($input['accuracy']) ? $input['accuracy'] : '') . '</td></tr>
        <tr><th>Service Location</th><td>' . htmlspecialchars(isset($input['serviceLocation']) ? $input['serviceLocation'] : '') . '</td></tr>
        <tr><th>Quantity</th><td>' . htmlspecialchars(isset($input['quantity']) ? $input['quantity'] : '') . '</td></tr>
    </table>
    
    <div class="section-title">Application & Service Details</div>
    <table>
        <tr><th>Application Type</th><td>' . htmlspecialchars(isset($input['applicationType']) ? $input['applicationType'] : '') . '</td></tr>
';

if (isset($input['scanningType']) && $input['scanningType']) {
    $htmlBody .= '<tr><th>3D Scanning Type</th><td>' . htmlspecialchars($input['scanningType']) . '</td></tr>';
}

if (isset($input['inspectionRef']) && $input['inspectionRef']) {
    $htmlBody .= '<tr><th>Reference 3D CAD Model</th><td>' . htmlspecialchars($input['inspectionRef']) . '</td></tr>';
    $htmlBody .= '<tr><th>Deliverables</th><td>' . (isset($input['inspectionDeliverables']) ? $input['inspectionDeliverables'] : '') . '</td></tr>';
}

if (isset($input['reverseEndUse']) && $input['reverseEndUse']) {
    $htmlBody .= '<tr><th>End Use</th><td>' . (isset($input['reverseEndUse']) ? $input['reverseEndUse'] : '') . '</td></tr>';
    $htmlBody .= '<tr><th>Deliverables</th><td>' . (isset($input['reverseDeliverables']) ? $input['reverseDeliverables'] : '') . '</td></tr>';
    $htmlBody .= '<tr><th>CAD Software Format</th><td>' . (isset($input['reverseCadFormat']) ? $input['reverseCadFormat'] : '') . '</td></tr>';
    $htmlBody .= '<tr><th>Existing 2D Drawing</th><td>' . htmlspecialchars(isset($input['reverseExisting2d']) ? $input['reverseExisting2d'] : '') . '</td></tr>';
    if (isset($input['reverse2dDrawings']) && $input['reverse2dDrawings']) {
        $htmlBody .= '<tr><th>2D Drawing Details</th><td>' . (isset($input['reverse2dDrawings']) ? $input['reverse2dDrawings'] : '') . '</td></tr>';
    }
}

$htmlBody .= '
    </table>
    <br>
    <p style="text-align: center; color: #888; font-size: 12px;">This email was automatically generated from Precise3DM Service Request Form.</p>
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
    $mail->FromName = "Precise3DM Service Request";
    $mail->addAddress('service@precise3dm.com'); // Send to admin
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail->addReplyTo($email, $name);
    }

    $mail->isHTML(true);
    $mail->Subject = "New 3D Service Request from " . $name;
    $mail->Body = $htmlBody;

    $mail->send();
    echo json_encode(['status' => 'success']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
}