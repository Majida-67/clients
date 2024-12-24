<?php
include 'db/connection.php';

// Assume user_id is passed as a query parameter (e.g., index.php?user_id=1)
$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

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
    <title>Profile Management</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="profile-container">
        <div class="profile-icon">👤</div>
        <?php if ($user): ?>
            <h1>Welcome, <?= htmlspecialchars($user['full_name']) ?>!</h1>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            <p><strong>Phone:</strong> <?= htmlspecialchars($user['phone'] ?? 'N/A') ?></p>
            <p><strong>Address:</strong> <?= nl2br(htmlspecialchars($user['address'] ?? 'N/A')) ?></p>
            <a href="edit_profile.php?user_id=<?= $user['id'] ?>" class="btn">Edit Profile</a>
        <?php else: ?>
            <h1>Create Your Profile</h1>
            <p>No profile found. Click the button below to get started!</p>
            <a href="edit_profile.php?user_id=<?= $user_id ?>" class="btn">Create Profile</a>
        <?php endif; ?>
    </div>
</body>
</html>
