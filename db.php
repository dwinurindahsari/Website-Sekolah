<?php
$servername = "localhost:4000";
$username = "root";
$password = ""; // Kosongkan jika tidak ada kata sandi
$dbname = "website_sekolah";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
