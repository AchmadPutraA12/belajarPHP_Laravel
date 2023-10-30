<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbKoperasi";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil informasi video dari database berdasarkan ID atau kriteria lainnya
$id = $_GET['id']; // ID video yang ingin ditampilkan
$sql = "SELECT produk.vidio AS video FROM produk WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $video_url = $row['video'];
    echo $video_url;
    // Tutup koneksi
    $conn->close();
} else {
    echo "Video tidak ditemukan";
    exit();
}
?>
