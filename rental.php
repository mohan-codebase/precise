<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $company = $_POST['company'];
    $project_description = $_POST['describe1'];
    $date = $_POST['date'];
    $location = $_POST['describe2'];

    // For Rental & Subscription Details
    $rent_sub = $_POST['rent-sub'];
    $scanner = $_POST['scanner1'];
    $laptop = $_POST['laptop'];
    $engineer = $_POST['engineer'];
    $rent_date = $_POST['rent-date'] ?? '';
    $sub_year = $_POST['sub-year'] ?? '';
    $sub_month = $_POST['sub-Monts'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                           // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'precise3dmdre@gmail.com';                 // SMTP username
        $mail->Password   = 'nctdxqoxvqhflyaj';                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
        $mail->Port       = 587;                                    // TCP port for TLS

        //Recipients
        $mail->setFrom('precise3dmdre@gmail.com', 'Your Name');        // Sender's email address
        $mail->addAddress('precise3dmdre@gmail.com', 'Recipient Name'); // Add recipient's email address
        $mail->addReplyTo($email, $name);                           // Reply-to address

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = 'New Rental/Subscription Inquiry';         // Subject of the email

        // Email body content (HTML)
        $bodyContent = "
    <h2 style='text-align: center;'>3D Scanner Rentals & Subscriptions in India Inquiry Details</h2>
    <table border='1' cellpadding='5' cellspacing='0' style='width: 100%; border-collapse: collapse;'>
        <tr>
            <th style='text-align: left;'>Name</th>
            <td style='text-align: left;'>$name</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Email</th>
            <td style='text-align: left;'>$email</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Phone</th>
            <td style='text-align: left;'>$phone</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Company</th>
            <td style='text-align: left;'>$company</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Project Description</th>
            <td style='text-align: left;'>$project_description</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Date</th>
            <td style='text-align: left;'>$date</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Location for Scanner Delivery</th>
            <td style='text-align: left;'>$location</td>
        </tr>
    </table>
    <br><br>
    <h3 style='text-align: center;'>Rental/Subscription Details</h3>
    <table border='1' cellpadding='5' cellspacing='0' style='width: 100%; border-collapse: collapse;'>
        <tr>
            <th style='text-align: left;'>Option Selected</th>
            <td style='text-align: left;'>$rent_sub</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Scanner Chosen</th>
            <td style='text-align: left;'>$scanner</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Do you require a Laptop with Scanning Software?</th>
            <td style='text-align: left;'>$laptop</td>
        </tr>
        <tr>
            <th style='text-align: left;'>Do you need a 3D Scanning Engineer?</th>
            <td style='text-align: left;'>$engineer</td>
        </tr>";

if ($rent_sub == '3D Scanner Rental') {
    $bodyContent .= "
        <tr>
            <th style='text-align: left;'>Duration of Rental</th>
            <td style='text-align: left;'>$rent_date</td>
        </tr>";
} elseif ($rent_sub == '3D Scanner Subscription') {
    $bodyContent .= "
        <tr>
            <th style='text-align: left;'>Subscription Duration</th>
            <td style='text-align: left;'>$sub_year, $sub_month</td>
        </tr>";
}

$bodyContent .= "</table>";



        // Attach the email body content
        $mail->Body = $bodyContent;

        // Send the email
        if ($mail->send()) {
          // Redirect to thankyou.php after the email is sent
          header("Location: thankyou.php");
          exit();
      } else {
          echo 'Message could not be sent.';
      }
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
