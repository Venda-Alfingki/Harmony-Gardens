<?php
session_start();
require_once 'db.php';

// Pastikan pengguna sudah login sebelum mengakses halaman ganti password
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $userId = $_SESSION['user_id'];

    // Ambil informasi pengguna dari database
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();

    // Periksa apakah password lama sesuai
    if ($user && password_verify($oldPassword, $user['password'])) {
        // Update password baru di database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
        $updateStmt->execute([$hashedPassword, $userId]);

        echo "Password updated successfully.";
    } else {
        echo "Failed to update password. Invalid old password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styleb.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Change Password</h2>
            <label for="old_password">Old Password:</label>
            <input type="password" name="old_password" required><br>

            <label for="new_password">New Password:</label>
            <input type="password" name="new_password" required><br>

            <input type="submit" value="Change Password">
            <p class="register-text"><a href="login.php">Back to Dashboard</a></p>
        </form>
    </div>
</body>
</html>
