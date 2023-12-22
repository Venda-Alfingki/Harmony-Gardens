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
        // Include the edit form
        include 'edit_testimoni_form.php';
    } else {
        // Redirect back to the page if the user doesn't own the testimonial
        header("Location: dashboard.php");
        exit();
    }
}
?>
