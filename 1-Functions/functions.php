<?php

// Create Functions

function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

function factorial(int $n)
{
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

// Function Parameter pass

function serve($foodType = "Coffiee", $numberOfItem = "1 Cup")
{
    return "{$numberOfItem} of {$foodType} has/have been serve!";
}

// Function Type Hunting

function sum(int $x, int $y, int $z): int {
    return $x + $y + $z;
}

// echo sum(2, 4, 5);

// Unlimited Arguments accept on function

function addition_num(int ...$numbers) :int{
    $result = 0;
    for($i = 0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}

// echo addition_num(12, 30,23,234,23,234);


// Recursive Function

function countN($n){
    if($n >10){
        return;
    }
    echo $n ."\n" ;
    $n ++;
    countN($n);
}

countN(3);
