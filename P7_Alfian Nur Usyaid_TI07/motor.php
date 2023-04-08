<?php

class Motor
{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak) //Kilo Meter
    {
        $jalan = $jarak / 30;
        $waktu = $jarak / $this->topSpeed;
        $this->bensin -= $jalan;

        echo "Motor <b>$this->merk $this->cc CC</b> telah berjalan sepanjang <b>$jarak km</b> dengan kecepatan <b>$this->topSpeed km/h</b>, sampai ke tempat tujuan dengan waktu <b>$waktu Jam</b> dan bensin yang tersisa yaitu <b>$this->bensin Liter</b> <hr><br>";
    }
}

$motor = new Motor('Vario', 3, 500, 250);
$motor->jalan(30);

$motor2 = new Motor('Supra', 10, 600, 650);
$motor2->jalan(10);

$motor3 = new Motor('NMax', 1, 750, 1500);
$motor3->jalan(30);

$motor4 = new Motor('PowerRanger', 2, 40, 10000);
$motor4->jalan(60);


?>