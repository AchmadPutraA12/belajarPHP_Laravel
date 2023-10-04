<?php
require_once 'Lingkaran.php';

$l1 = new Lingkaran(5);
$l2 = new Lingkaran(10);

$out = [$l1, $l2];

foreach($out as $ou){
    echo '<br>' .$ou->jari2;
    echo '<br>' .$ou->keliling();
    echo '<br>' .$ou->Luasbidang();
}
//$l1 = $luas -> luasBidang();

//selesaikan agar hasil lingkaran dapat dilihat beserta jari-jari;
?>