<?php

require 'automobile.php';

class Suv extends Car{
    public $numberCarDoor;
    public $height;
    public $weight;
    public static $suvCounter=0;

    public function constructor($_brand, $_model, $_color, $_numberCarDoor, $_height, $_weight){
        parent::__constructor($_brand, $_model, $_color);
        $this->numberCarDoor = $_numberCarDoor;
        $this->height = $_height;
        $this->weight = $_weight;
        self::$suvCounter++;
    }


    public function getInfoSuv(){
        echo "Abbiamo una $this->brand $this->model di colore $this->color. Ha $this->numberCarDoor porte, un'altezza da terra di $this->height cm e che pesa $this->weight kg.\n";
    }
}

$stelvio = new Suv('Alfa Romeo', 'Stelvio', 'Nero', 5, 70, 1800);
$glc = new Suv('Merceddes', 'GLC', 'Bianco', 5, 76, 2100);
$Grecale = new Suv('Maserati', 'Grecale', 'Blu', 5, 68, 1950);


$stelvio->getInfoSuv();