<?php
require 'KonversiSuhu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="images/menu.png" class="menu">
            <img src="images/setting.png" class="setting">
            <img src="images/achmad.jpg" class="gambar-profil">
            <h3>Tugas Ke 5 PHP</h3>
            <p>Achmad Putra Arifky</p>
            <br>
            <div class="">
                <form method="POST">
                    <label for="">Masukkan Suhu</label>
                    <input class="input-field" name="suhu" type="text" placeholder="Masukkan Suhu" required>
                    <br><br>
                    <label for="">Pilih Suhu Pertama</label>
                    <select class="input-field" name="suhuAwal" id="">
                        <option value="celcius">Celcius</option>
                        <option value="farenheit">Farenheit</option>
                        <option value="kelvin">Kelvin</option>
                    </select>
                    <br><br>
                    <label for="">Konversi Suhu Ke</label>
                    <select class="input-field" name="suhuAkhir" id="">
                        <option value="celcius">Celcius</option>
                        <option value="farenheit">Farenheit</option>
                        <option value="kelvin">Kelvin</option>
                    </select>
                    <br><br>
                    <button name="simpan" class="center" id="click">Cek</button>
                    <br><br>
                </form>
                <?php
                error_reporting(0);
                $save = $_POST['simpan'];
                $suhu = $_POST['suhu'];
                $suhuAwal = $_POST['suhuAwal'];
                $suhuAkhir = $_POST['suhuAkhir'];
                if (isset($save)) {
                    $konver = new KonversiSuhu($suhuAwal,$suhu,$suhuAkhir);
                ?>
                    <table>
                        <tr>
                            <th>Satuan Suhu Awal</th>
                            <th>Besaran Suhu</th>
                            <th>Satuan Suhu Tujuan</th>
                            <th>Hasil Konversi Suhu</th>
                        </tr>
                        <tr>
                            <td><?= $suhuAwal ?></td>
                            <td><?= $suhu ?></td>
                            <td><?= $suhuAkhir ?></td>
                            <td><?= $konver->cetak() ?></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>