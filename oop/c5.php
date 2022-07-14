<?php 

class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }
    public function run(){
        echo "{$this->name} is running\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){}
}

class Human extends Animal{
    public function greet(){
        echo "{$this->name} says Hi\n";
    }
}
class Cat extends Animal{
    public function greet(){
        echo "{$this->name} says Meow\n";
    }
}
class Dog extends Animal{
    public function greet(){
        echo "{$this->name} says Ghaow\n";
    }
}

$per1 = new Human("Dina Pal");
$per1->eat();

$cat = new Cat("Tom");

$cat->greet();



