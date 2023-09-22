<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <style>
        table,th,td{
            padding: 5px;
            text-align: center;
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h3>Tugas Ke 2 PHP</h3>
    <p>Achmad Putra Arifky</p>
    <br>
    <div>
        <form id="form" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" required> <br> <br>
            <select name="pekerjaan">
                <option value="">---Pilihan Pekerjaan---</option>
                <option value="Tentara">Tentara</option>
                <option value="Polisi">Polisi</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Dokter">Dokter</option>
                <option value="Guru">Guru</option>
                <option value="Peneliti">Peneliti</option>
                <option value="Pedagang">Pedagang</option>
                <option value="Arsitek">Arsitek</option>
                <option value="Perawat">Perawat</option>
                <option value="Bidan">Bidan</option>
            </select>
            <br><br>
            <input type="radio" name="radio" value="Berenang">Berenang
            <input type="radio" name="radio" value="Travelling">Travelling
            <br>
            <input type="radio" name="radio" value="Menari">Menari
            <input type="radio" name="radio" value="Menyanyi">Menyanyi
            <br>
            <input type="radio" name="radio" value="MainGame">Main Game
            <input type="radio" name="radio" value="Memancing">Memancing
            <br>
            <input type="radio" name="radio" value="Melukis">Melukis
            <input type="radio" name="radio" value="Mendaki">Mendaki
            <br>
            <input type="radio" name="radio" value="Photorafer">Photorafer
            <input type="radio" name="radio" value="MenulisPuisi">Menulis Puisi
            <br><br>

            <button name="simpan" class="center">Simpan</button>
            <br><br><br>
        </form>
    </div>
    </div>
    </div>
    <?php
    error_reporting(0);
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['radio'];
    $simpan = $_POST['simpan'];
    if (isset($simpan)) {
    ?>
        <table>
            <tr>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Hobby</th>
            </tr>
            <tr>
                <td><?= $nama ?></td>
                <td><?= $pekerjaan ?></td>
                <td><?= $hobby ?></td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>