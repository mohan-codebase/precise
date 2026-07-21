<?php
// Database connection details
// $servername = 'localhost';
// $username = 'prec_shopuser';
// $password = 'precise3dm';
// $dbname = 'prec_shopdb';

$servername = 'localhost:3307'; // Server hostname
$username = 'root'; // Database username
$password = ''; // Database password
$dbname = 'precise-cards'; // Database name
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error()); // Detailed error message
}

// Success message
echo "Connected successfully";
?>
