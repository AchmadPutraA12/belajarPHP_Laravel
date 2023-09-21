<?php

$namaSiswa = "Achmad Putra A";
$umur = 25;
$beratBadan = 30.5;
$pekerjaan = 'Mahasiswa';

//contoh variabel constanta
$jari2 = 15;
define('PHI',3.14);
$luas = PHI * $jari2 * $jari2;

echo 'Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br>Berat Badan : '.$beratBadan;
echo '<br>Berat Badan : $beratBadan kg';
echo "<br>Berat Badan : $beratBadan kg";
echo '<br>Pekerjaan : '.$pekerjaan;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>sisw <?= $beratBadan?></h1>
    <p>Luas = <?= $luas?></p>
</body>
</html>