<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    public $tinggi;
    public $alas;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }
    public function kelilingBidang(){
        $c = sqrt($this->alas*$this->alas + $this->tinggi*$this->tinggi);
        return $this->alas + $this->tinggi + $c;
    }
    public function luasBidang(){
        return 0.5 * $this->alas * $this->tinggi;
    }
}
?>