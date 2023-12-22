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
    $content = $_POST['content'];

    // Tangkap data gambar
    $image = $_FILES['image'];

    // Cek apakah direktori uploads sudah ada, jika belum, buat
    $uploads_dir = 'uploads';
    if (!is_dir($uploads_dir)) {
        mkdir($uploads_dir);
    }

    // Cek apakah ada file yang diunggah
    if ($image['error'] === UPLOAD_ERR_OK) {
        // Dapatkan informasi file
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];
        $image_type = $image['type'];

        // Tentukan lokasi penyimpanan file
        $upload_path = $uploads_dir . '/' . $image_name;

        // Pindahkan file yang diunggah ke lokasi penyimpanan
        if (move_uploaded_file($image_tmp_name, $upload_path)) {
            // Simpan testimoni ke database
            $user_id = $_SESSION['user_id'];
            $stmt = $conn->prepare("INSERT INTO testimoni (user_id, content, image_path) VALUES (?, ?, ?)");
            $stmt->execute([$user_id, $content, $upload_path]);

            // Redirect ke halaman testimoni
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "Error: " . $image['error'];
    }
}
?>
