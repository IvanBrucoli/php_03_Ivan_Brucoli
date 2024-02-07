<?php

require 'automobile.php';

class Economy extends Car{
    public $year;
    public $price;
    public $roofRack;
    public static $economyCounter=0;

    public function constructor($_brand, $_model, $_color, $_year, $_price, $_roofRack){
        parent::__constructor($_brand, $_model, $_color);
        $this->year = $_year;
        $this->price = $_price;
        $this->roofRack = $_roofRack;
        self::$economyCounter++;
    }


    public function getInfoEconomy(){

    }
}

$mito = new Economy('Alfa Romeo', 'Mito', 'Rosso', 2009, 5000, 'No');
$glc = new Economy('Mercedes', 'B', 'Bianco', 2018, 18000, 'Optional');
$panda = new Economy('Fiat', 'Panda', 'Rosso sbiadito', 1989, 1, 'Obbligatorio');