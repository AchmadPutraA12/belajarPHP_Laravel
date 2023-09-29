<?php 
function salam(){
    echo '<br> Selamat Pagi Teman - Teman';
}

function sapa($kawan){
    echo '<br> Selamat Pagi '.$kawan;
}

function kabar($kawan = 'Budi'){
    echo '<br> Hai apa Kabar '.$kawan;
}

//eksekusi
salam();
$nama = 'kiki';
sapa($nama);
sapa('putra');

kabar();
kabar('ahmad');

echo '<hr>';

function prima($bilangan){
    $prima = true;
    for($i = 2; $i < $bilangan; $i++){
        if($bilangan % $i == 0){
            $prima = false;
            break;
        }
    }return $prima;
}

if(prima(12)){
    echo '<br>Bilangan Prima';
} else {
    echo '<br>Bukan Bilangan Prima';
}
?>