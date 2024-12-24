<?php
include 'db/connection.php';

// Get POST data
$user_id = 1; // Assuming user ID = 1 for demo purposes
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Check if the user already exists
$sql_check = "SELECT id FROM users WHERE id = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("i", $user_id);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    // User exists, update the profile
    $sql_update = "UPDATE users SET full_name=?, email=?, phone=?, address=? WHERE id=?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ssssi", $full_name, $email, $phone, $address, $user_id);
    $stmt_update->execute();
    $stmt_update->close();
} else {
    // User does not exist, create a new profile
    $sql_insert = "INSERT INTO users (id, full_name, email, phone, address) VALUES (?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("issss", $user_id, $full_name, $email, $phone, $address);
    $stmt_insert->execute();
    $stmt_insert->close();
}

$stmt_check->close();
$conn->close();

// Redirect to profile page after success
header("Location: profile.php");

exit();
?>
