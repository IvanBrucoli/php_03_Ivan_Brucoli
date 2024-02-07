<?php

class Person{
    public $name;
    public $surname;
    public $age;
    public static $counter = 0;

    public function __construct($_name, $_surname, $_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age; 
        self::$counter++;
    }
    public function sayHello(){
        echo "Ciao sono $this->name $this->surname ed ho $this->age anni.\n";
    }
}

$claudio = new Person('Claudio', 'Gugliotta', 28);
$jasmine = new Person('Jasmine', 'Nicolella', 29);
$ivan = new Person('Ivan','Brucoli', 27);
$alberto = new Person('Alberto', 'Foglia', 20);


$claudio->sayHello();
$jasmine->sayHello();
$ivan->sayHello();
$alberto->sayHello();
var_dump(Person::$counter);
echo Person::$counter;