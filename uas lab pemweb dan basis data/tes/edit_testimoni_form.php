<!-- edit_testimoni_form.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimoni</title>
</head>

<body>

    <h2>Edit Testimoni</h2>
    <!-- edit_testimoni_form.php -->
<form action="update_testimoni.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $testimoni_id; ?>">
    <textarea name="content" placeholder="Tulis testimoni Anda..." required><?php echo htmlspecialchars($testimoni['content']); ?></textarea>
    <label for="newImage">Pilih gambar baru:</label>
    <input type="file" name="newImage">
    <input type="submit" value="Update Testimoni">
</form>


</body>

</html>
