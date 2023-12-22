<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $testimoni_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    // Check if the logged-in user is the owner of the testimonial
    $stmt = $conn->prepare("SELECT * FROM testimoni WHERE id = ? AND user_id = ?");
    $stmt->execute([$testimoni_id, $user_id]);
    $testimoni = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($testimoni) {
        // Delete testimonial
        $stmt = $conn->prepare("DELETE FROM testimoni WHERE id = ?");
        $stmt->execute([$testimoni_id]);
    }

    // Redirect back to the page
    header("Location: dashboard.php");
    exit();
}
?>
