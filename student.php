<?php

require 'person.php';

class Student extends Person{
    public $favoriteSubject;
    public $vote;

    public function construct($_name, $_surname, $_age, $_favoriteSubject, $_vote){
        parent::__construct($_name, $_surname, $_age);
        $this->favoriteSubject = $_favoriteSubject;
        $this->vote = $_vote;
    }
    public function sayHelloStudent(){
        echo "Ciao sono $this->name $this->surname ed ho $this->age anni. La mia materia prefrita è $this->favoriteSubject ed ho preso $this->vote\n";
    }
}

$claudio = new Student('Claudio', 'Gugliotta', 28, 'meccanica', 9);
$jasmine = new Student('Jasmine', 'Nicolella', 29, 'storia', 10);
$ivan = new Student('Ivan', 'Brucoli', 27, 'matematica', 8);
$alberto = new Student('Alberto', 'Foglia', 20, 'informatica', 9);

$claudio->sayHelloStudent();
$jasmine->sayHelloStudent();
$ivan->sayHelloStudent();
$alberto->sayHelloStudent();
