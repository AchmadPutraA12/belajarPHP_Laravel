<?php
function hitung($a1, $a2, $tombol)
{
    if ($tombol == '+') $hasil = $a1 + $a2;
    else if ($tombol == '-') $hasil = $a1 - $a2;
    else if ($tombol == '*') $hasil = $a1 * $a2;
    else if ($tombol == '/') $hasil = $a1 / $a2;
    else $hasil = 0;
    return $hasil;
}
hitung(70, 7, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Kalkulator</h1>
    <form method="POST">
        <div class="inputan">
            <label for="">
                Angka 1
                <input type="text" name="a1" id="a1" required>
            </label><br><br>
            <label for="">
                Angka 2
                <input type="text" name="a2" id="a2" required>
            </label><br><br>
            <input type="submit" name="tombol" value="+">
            <input type="submit" name="tombol" value="-">
            <input type="submit" name="tombol" value="*">
            <input type="submit" name="tombol" value="/">
        </div>
        <div class="hasil">
            <?php 
            if(isset($_POST['tombol'])){
                $a1 = $_POST['a1'];
                $a2 = $_POST['a2'];
                $tombol = $_POST['tombol'];
                $hasil = hitung($a1,$a2,$tombol);
                echo '<br>Hasil adalah '.$hasil;
            }
            ?>
        </div>
    </form>
</body>

</html>