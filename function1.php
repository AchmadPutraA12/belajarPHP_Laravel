<?php
$str = 'Belajar PHP Kampus Merdeka';
echo $str;

$str = strtoupper($str);
echo '<br>'.$str;

$str = strtolower($str);
echo '<br>'.$str;

$ar_buah = ['Pepaya','Mangga','Pisang','Jambu','Apel'];

sort($ar_buah);//mengurutkan data sesuai abjad
foreach ($ar_buah as $buah){
    echo '<br>' .$buah;
}

echo '<hr>';
arsort($ar_buah);//mengurutkan data desc
foreach ($ar_buah as $buah){
    echo '<br>' .$buah;
}
?>