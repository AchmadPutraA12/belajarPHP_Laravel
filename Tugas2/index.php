<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="images/menu.png" class="menu">
            <img src="images/setting.png" class="setting">
            <img src="images/achmad.jpg" class="gambar-profil">
            <h3>Tugas Ke 4 Javascript</h3>
            <p>Achmad Putra Arifky</p>

            <div class="toko">
                <form id="form" method="POST">
                    <label for=""><center>Nama</center></label>
                    <input type="text" class="input-field" name="nama" placeholder="Masukkan Nama" required> <br><br>
                    <select name="pekerjaan" class="input-field">
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
                    <center>
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
                    <br>
                    </center>
                    
                    
                    <button name="simpan" class="center" id="click">Simpan</button>                    
                </form>
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
                
            </div>
        </div>
    </div>    
    
    
</body>

</html>