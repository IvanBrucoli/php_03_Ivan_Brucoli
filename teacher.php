<?php

require 'person.php';

class Teacher extends Person{
    private $wage;
    public $subject;

    public function construct($_name, $_surname, $_age, $_wage, $_subject){
        parent::__construct($_name, $_surname, $_age);
        $this->subject = $_subject;
        $this->wage = $_wage;
    }
    public function sayHelloTeacher(){
        echo "Salve a tutti sono il docente $this->name $this->surname, ho $this->age anni ed insegno $this->subject. Al mese guadagno $this->wage euro.";
    }
}

$rocco = new Teacher('Rocco', 'Pippo', 48, 1700, 'Filosofia');

$rocco->sayHelloTeacher();