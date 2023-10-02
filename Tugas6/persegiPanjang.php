<?php
require_once 'Abstract.php';

class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang(){
        echo 'Persegi Panjang';
    }
    public function kelilingBidang(){
        return 2*($this->panjang + $this->lebar);
    }
    public function luasBidang(){
        return  $this->panjang * $this->lebar;
    }
    public function Keterangan(){
        echo 'Panjang : '.$this->panjang;
        echo '<br>Lebar : '.$this->lebar;
    }
}
?>