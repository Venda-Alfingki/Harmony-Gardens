<?php
$host = 'localhost';
$user = 'postgres';
$pass = 'vee230604';
$db = 'mydb';

try {
    // Connect to PostgreSQL using PDO
    $conn = new PDO("pgsql:dbname=$db;host=$host", $user, $pass);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Exit the script if the connection fails
}
?>