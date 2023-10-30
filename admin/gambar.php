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

// Ambil data gambar dari database berdasarkan ID atau kriteria lainnya
$id = $_GET['id']; // ID gambar yang ingin ditampilkan
$sql = "SELECT produk.gambar FROM produk WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['gambar'];

    // Tentukan tipe konten gambar
    header("Content-Type: image/*"); // Sesuaikan tipe konten sesuai dengan format gambar yang Anda simpan

    // Keluarkan data gambar
    echo $imageData;
} else {
    echo "Gambar tidak ditemukan";
}

// Tutup koneksi
$conn->close();
?>
