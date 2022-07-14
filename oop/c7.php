<?php 

class ParentClass{
    protected $name;
    
    public function __construct($name){
        $this->name = $name;
    }
    public function sayHi(){
        echo "Hi from {$this->name}";
    }
}

class ChildClass extends ParentClass{
    public function sayHi(){
        parent::sayHi();
    }
}

$cc = new ChildClass("ABCD");
$cc->sayHi();