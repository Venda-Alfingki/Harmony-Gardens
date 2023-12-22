<?php
session_start();
require_once 'db.php';

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    // Jika tidak, mungkin redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangkap data dari form
    $testimoni_id = $_POST['id'];
    $newContent = $_POST['content'];

    // Cek apakah direktori uploads sudah ada, jika belum, buat
    $uploads_dir = 'uploads';
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir);
    }

    // Tangkap data gambar baru
    $newImage = $_FILES['newImage'];

    // Cek apakah ada file yang diunggah
    if ($newImage['error'] === UPLOAD_ERR_OK) {
        // Dapatkan informasi file baru
        $newImageName = $newImage['name'];
        $newImageTmpName = $newImage['tmp_name'];
        $newImageSize = $newImage['size'];
        $newImageType = $newImage['type'];

        // Tentukan lokasi penyimpanan file baru
        $uploadPath = $uploads_dir . '/' . $newImageName;

        // Pindahkan file baru yang diunggah ke lokasi penyimpanan
        if (move_uploaded_file($newImageTmpName, $uploadPath)) {
            // Update testimoni dan gambar baru di database
            $stmt = $conn->prepare("UPDATE testimoni SET content = ?, image_path = ? WHERE id = ?");
            $stmt->execute([$newContent, $uploadPath, $testimoni_id]);

            // Redirect ke halaman testimoni
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Gagal mengunggah file baru.";
        }
    } else {
        echo "Error: " . $newImage['error'];
    }
}
?>
