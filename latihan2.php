<?php 
$nama = "Achmad Putra A";
$nilai = 85;
if($nilai >= 85 && $nilai <= 100) $grade = "A";
else if($nilai >= 75 && $nilai <= 84) $grade = "B";
else if($nilai >= 60 && $nilai <= 74) $grade = "C";
else if($nilai >= 30 && $nilai <= 59) $grade = "D";
else if($nilai >= 0 && $nilai <= 29) $grade = "E";
else $grade = "";

switch($grade){
    case "A" : $predikat = "Memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default : $predikat = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nama : <?= $nama?></h1>
    <h2>Nilai : <?= $nilai?></h2>
    <h2>Grade : <?= $grade?></h2>
    <h2>Predikat : <?= $predikat?></h2>
</body>
</html>