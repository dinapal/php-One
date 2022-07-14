<?php 

class Fund{
    public $fund;

    public function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }
    public function getBlance(){
        echo "Total Amount is {$this->fund}";
    } 
}
$myfund = new Fund(100);
// Deposite 200
$myfund->addFund(200);

// Duduct 45
$myfund->deductFund(45);
$myfund->getBlance();