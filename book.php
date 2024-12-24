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
        $last_id = $conn->insert_id; // Get the last inserted ID for the receipt

        // Fetch the booking details to display the receipt
        $receipt_query = $conn->prepare("SELECT * FROM receipts WHERE id = ?");
        $receipt_query->bind_param("i", $last_id);
        $receipt_query->execute();
        $result = $receipt_query->get_result();
        $receipt = $result->fetch_assoc();
        echo "
        <div style='max-width: 600px; margin: 20px auto; padding: 20px; background: #87d3d7; color: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center;'>
            <h2 style='margin-bottom: 20px; color: #010c3e;'>Receipt</h2>
            <p><strong>Booking ID:</strong> " . $receipt['id'] . "</p>
            <p><strong>Customer Name:</strong> " . $receipt['customer_name'] . "</p>
            <p><strong>Service Type:</strong> " . $receipt['service_type'] . "</p>
            <p><strong>Booking Date:</strong> " . $receipt['booking_date'] . "</p>
            <p><strong>Amount Paid:</strong> $" . $receipt['amount'] . "</p>
            <a href='HomeService.php' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background: #010c3e; color: #fff; text-decoration: none; border-radius: 4px; font-weight: bold;'>Back to Home</a>
        </div>";
        $receipt_query->close();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
