<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body id="admindashboard">
    <h1>Selamat datang, Admin</h1>
    <a href="logout.php">Logout</a>

    <h2>Unggah Berita Baru</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Judul Berita:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="content">Konten Berita:</label>
        <textarea name="content" id="content" required></textarea>
        <br>
        <label for="image">Pilih Gambar:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" name="submit" value="Unggah Berita">
    </form>
</body>
</html>
