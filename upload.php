<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit;
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    // Pindahkan gambar yang diunggah ke folder 'uploads'
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO news (title, content, image_url) VALUES ('$title', '$content', '$target')";
        if ($conn->query($sql) === TRUE) {
            echo "Berita berhasil diunggah.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah gambar.";
    }
}
$conn->close();
?>
