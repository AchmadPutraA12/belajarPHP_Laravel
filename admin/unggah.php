<?php
function uploadFile($pdo, $targetDirectory) {
    // Cek apakah ada file yang diunggah
    if (isset($_FILES["file"])) {
        $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

        // Cek apakah file sudah ada
        if (file_exists($targetFile)) {
            return "File sudah ada.";
        } else {
            // Pindahkan file ke folder yang ditentukan
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                // Simpan informasi file ke database
                $fileName = htmlspecialchars(basename($_FILES["file"]["name"]));
                $sql = "INSERT INTO files (filename) VALUES (:filename)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':filename', $fileName);
                $stmt->execute();

                return "File $fileName berhasil diunggah dan informasi disimpan ke database.";
            } else {
                return "Terjadi kesalahan saat mengunggah file.";
            }
        }
    } else {
        return "Mohon pilih file terlebih dahulu.";
    }
}

try {
    $pdo = new PDO("mysql:host=your_host;dbname=your_database", "your_username", "your_password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $targetDirectory = "uploads/";
    $uploadResult = uploadFile($pdo, $targetDirectory);

    echo $uploadResult;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>