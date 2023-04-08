<?php

class Hero
{
    // Attribute / Properties pada Class
    public $name;
    public $health;
    public $damage;
    public $level = 1;


    // Constructor
    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function getInfo()
    {
        echo "<br> <hr>Nama Hero: " . $this->name;
        echo "<br>HP: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>Level: " . $this->level;
    }

    public function levelUp()
    {
        $this->level += 1;
        $this->health += 1000;
        $this->damage += 150;
    }

    public function attack($target)
    {
        $target->health -= $this->damage;
    }

}

// Membuat objek dari class hero
$hero1 = new Hero('Alucard', 3200, 200);
$hero1->levelUp();
$hero1->getInfo();

$hero2 = new Hero('Moskov', 900000, 5000);
$hero2->getInfo();

echo "<br> <hr>";

$hero1->attack($hero2);

$hero1->getInfo();
$hero2->getInfo();






?>