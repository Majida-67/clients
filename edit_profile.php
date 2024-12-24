<?php
include 'db/connection.php';

// Fetch user_id from query parameter
$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
$conn->close();

// Initialize empty fields if no profile exists
if (!$user) {
    $user = [
        'full_name' => '',
        'email' => '',
        'phone' => '',
        'address' => ''
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= empty($user['full_name']) ? "Create Profile" : "Edit Profile" ?></title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="profile-container">
        <h1><?= empty($user['full_name']) ? "Create Your Profile" : "Edit Your Profile" ?></h1>
        <form id="profileForm" action="update_info.php" method="POST">
            <input type="hidden" name="user_id" value="<?= $user_id ?>">
            
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" value="<?= htmlspecialchars($user['full_name']) ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($user['phone']) ?>">

            <label for="address">Address</label>
            <textarea id="address" name="address" required><?= htmlspecialchars($user['address']) ?></textarea>

            <button type="submit" class="btn"><?= empty($user['full_name']) ? "Create Profile" : "Save Changes" ?></button>
        </form>
    </div>
</body>
</html>
