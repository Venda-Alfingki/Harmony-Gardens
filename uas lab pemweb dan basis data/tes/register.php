<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <div class="container">
        <form action="register_process.php" method="post">
            <h2>Register</h2>
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" value="Register">
            <p class="register-text">Sudah punya akun? <a href="login.php">Login here.</a></p>
        </form>
    </div>
</body>
</html>

