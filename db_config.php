<?php
$servername = "localhost";
$username = "root";  // change with your DB username
$password = "";      // change with your DB password
$dbname = "carwash_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
