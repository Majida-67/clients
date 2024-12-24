<?php
include 'db/connection.php';

// Fetch user data
$user_id = 1; // Assuming user ID = 1 for demo purposes
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="profile-container">
        <?php if ($user): ?>
            <h1>Welcome, <?= htmlspecialchars($user['full_name']) ?>!</h1>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            <p><strong>Phone:</strong> <?= htmlspecialchars($user['phone'] ?? 'N/A') ?></p>
            <p><strong>Address:</strong> <?= nl2br(htmlspecialchars($user['address'] ?? 'N/A')) ?></p>
           
            <a href="edit_profile.php" class="btn" >Edit Profile</a>
            <a href="HomeService.php" class="btn" >Back to Home</a>


        <?php else: ?>
            <h1>No Profile Found</h1>
            <a href="edit_profile.php" class="create-btn">Create Profile</a>
        <?php endif; ?>
    </div>
</body>

</html>