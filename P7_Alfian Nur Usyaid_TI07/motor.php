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
        $this->bensin -= $jalan;

        echo "Motor $this->merk $this->cc CC telah berjalan sepanjang $jarak KM dengan kecepatan  $this->topSpeed km/h dan sisa bensin yang tersisa yaitu $this->bensin Liter <hr><br>";
    }
}

$motor = new Motor('Vario', 3, 500, 250);
$motor->jalan(30);

$motor2 = new Motor('Supra', 10, 600, 600);
$motor2->jalan(10);

$motor3 = new Motor('NMax', 1, 750, 1000);
$motor3->jalan(30);


?>