<?php
$servername = "localhost";
$username = "root";
$password = "1234"; // Replace 'your_root_password' with your actual MySQL root password
$database = "blood_donation";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>

