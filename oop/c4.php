<?php 

class RGB{
    public $color;
    public $red;
    public $green;
    public $blue;

    function __construct($colorCode){
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    function getColor(){
        return $this->color;
    }
    
    function setColor($colorCode){
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }
    function getRgbColor(){
       return array($this->red, $this->green, $this->blue);
    }
    function readRgbColor(){
        return "Red:{$this->red}\nGreen:{$this->green}\nBlue:{$this->blue}";
    }
    function redColor(){
        return $this->red;
    }
    function greenColor(){
        return $this->green;
    }
    function blueColor(){
        return $this->blue;
    }
    
    
    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }
}
$c = new RGB("#ff0000");

var_dump($c->getRgbColor());
