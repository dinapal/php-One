<?php 

// Recoursive Function

function printN($n){
    if($n >=10){
        return;
    }
    echo $n . "\n";
    $n ++;

    printN($n);
}

// printN(0);

function printBNumber($start, $end, $staping){
    if($start >= $end){
        return;
    }

    echo $start . "\n";
    
    $start +=$staping;

    printBNumber($start, $end, $staping);
}

// printBNumber(20, 33, 3);


// Create Factorial function using recoursive function

function factoriall($n){
    if($n < 2){
        return 1;
    }else{
        return $n * factoriall($n -1);
    }
    
}
echo factoriall(4);

