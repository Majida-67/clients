<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_name = $_POST['customer_name'];
    $service_type = $_POST['service_type'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO receipts (customer_name, service_type, amount) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $customer_name, $service_type, $amount);

    if ($stmt->execute()) {
        echo "<p>Booking created successfully!</p>";
        echo "<a href='index.php'>Back to Home</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
