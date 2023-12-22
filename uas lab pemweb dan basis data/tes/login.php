<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <div class="container">
        <form action="login_process.php" method="post">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login">
            <p class="register-text">Belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>
