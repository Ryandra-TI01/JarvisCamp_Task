<?php 

class Kendaraan {
    // property
    public $nama;
    public $merek;
    public $warna;

    // constructor 
    public function __construct($nama,$merek,$warna) {
        $this->nama = $nama;
        $this->merek = $merek;
        $this->warna = $warna;
    }

    // method
    public function get_merek() {
        return $this->merek;
    }

}

class Motor extends Kendaraan
{
    // property
    public $tahun;

    // constructor
    public function __construct($nama, $merek, $warna,$tahun){
        parent::__construct($nama,$merek,$warna);

        $this->tahun = $tahun;
    }
    // method
    public function getInfo() {
        return "INFO MOBIL </br></br> NAMA : $this->nama </br> MEREK : $this->merek </br> WARNA : $this->warna </br> TAHUN : $this->tahun";
    }

}


$mobil_1 = new Motor("Avanza","Toyota","merah",2021);


echo $mobil_1->getInfo();
echo "</br>";
echo $mobil_1->get_merek();