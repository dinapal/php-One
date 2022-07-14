<?php 

class Human{
    public $name;
    public $age;
    function __construct($name, $age = 0){
        $this->name = $name;
        $this->age  = $age;
    }
    function sayHi(){
        echo "Hi my name is {$this->name}, i'm a {$this->age} years old\n";
    }
}

$h1 = new Human("Dina Pal", 28);
$h2 = new Human("Chiranjit Pal", 22);
$h1->sayHi();
$h2->sayHi();
