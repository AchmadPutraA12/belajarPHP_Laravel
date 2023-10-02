<?php
require_once 'lingkaran.php';
require_once 'segitiga.php';
require_once 'persegiPanjang.php';

$l1 = new Lingkaran(5);
$l2 = new Lingkaran(10);
$p1 = new PersegiPanjang(3, 4);
$p2 = new PersegiPanjang(8, 5);
$s1 = new Segitiga(2,3);
$s2 = new Segitiga(4,5);

$arrScalar = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
$arrObjek = [$l1, $l2, $p1, $p2, $s1, $s2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="images/menu.png" class="menu">
            <img src="images/setting.png" class="setting">
            <img src="images/achmad.jpg" class="gambar-profil">
            <h3>Tugas Ke 6 PHP</h3>
            <p>Achmad Putra Arifky</p>
            <br>
            <div class="">
                <table>
                    <thead>
                        <?php
                        foreach($arrScalar as $arr){
                        ?>
                        <th><?= $arr?></th>
                        <?php }?>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($arrObjek as $objek){
                        ?>
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $objek->namaBidang() ?></td>
                            <td><?= $objek->Keterangan() ?></td>
                            <td><?= $objek->luasBidang() ?></td>
                            <td><?= $objek->kelilingBidang()?></td>
                        </tr>
                        
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>