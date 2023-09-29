<?php
class KonversiSuhu{
    private $satuanAwal;
    private $suhu;
    private $satuanAkhir;

    public function __construct($satuanAwal, $suhu, $satuanAkhir){
        $this->satuanAwal = $satuanAwal;
        $this->suhu = $suhu;
        $this->satuanAkhir = $satuanAkhir;
    }

    public function celciusToFarenheit(){
        return ($this->suhu * 9/5) + 32;
    }

    public function celciusToKelvin(){
        return $this->suhu + 273.15;
    }

    public function farenheitToCelcius(){
        return ($this->suhu - 32) * 5/9;
    }

    public function farenheitToKelvin(){
        return ($this->suhu - 32) * 5/9 + 273.15;
    }

    public function kelvinToCelcius(){
        return $this->suhu - 273.15;
    }

    public function kelvinToFarenheit(){
        return ($this->suhu - 273.15) * 9/5 + 32;
    }

    private function Konversi(){
        switch ($this->satuanAwal){
            case 'celcius':
                if ($this->satuanAkhir == 'celcius') {
                    return $this->suhu;
                }
                else if ($this->satuanAkhir == 'farenheit'){
                    return $this->celciusToFarenheit();
                }
                else if ($this->satuanAkhir == 'kelvin'){
                    return $this->celciusToKelvin();
                }
                else{
                    echo "Tidak Valid";
                }
                break;
            case 'farenheit':
                if ($this->satuanAkhir == 'celcius') {
                    return $this->farenheitToCelcius();
                }
                else if ($this->satuanAkhir == 'farenheit'){
                    return $this->suhu;
                }
                else if ($this->satuanAkhir == 'kelvin'){
                    return $this->farenheitToKelvin();
                }
                else{
                    echo "Tidak Valid";
                }
                break;
            
            case 'kelvin':
                if ($this->satuanAkhir == 'celcius') {
                    return $this->kelvinToCelcius();
                }
                else if ($this->satuanAkhir == 'farenheit'){
                    return $this->kelvinToFarenheit();
                }
                else if ($this->satuanAkhir == 'kelvin'){
                    return $this->suhu;
                }
                else{
                    echo "Tidak Valid";
                }
                break;
        }
    }

    public function cetak(){
        echo $this->Konversi();
    }
}
?>