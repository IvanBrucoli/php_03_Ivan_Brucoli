<?php

require 'automobile.php';

class Supercar extends Car{
    public $hp;
    public $maxSpeed;
    public static $supercarCounter=0;

    public function constructor($_brand, $_model, $_color, $_hp, $_maxSpeed){
        parent::__constructor($_brand, $_model, $_color);
        $this->hp = $_hp;
        $this->maxSpeed = $_maxSpeed;
        self::$supercarCounter++;
    }


    public function getInfoSupercar(){

    }
}

$ferrari = new Supercar('Ferrari', '488', 'Rosso', 720, 320);
$lamborghini = new Supercar('Lamborghini', 'Huracan', 'Giallo', 700, 310);
$mclaren = new Supercar('McLren', '720s', 'Arancione', 780, 330);