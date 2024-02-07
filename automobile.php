<?php

class Car{
    public $brand;
    public $model;
    public $color;
    public static $carCounter=0;

    public function __constructor($_brand, $_model, $_color){
        $this->brand = $_brand;
        $this->model = $_model;
        $this->color = $_color;
        self::$carCounter++;
    }

    public function getInfo(){

    }
}