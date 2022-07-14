<?php 

$students = [
    'Dina',
    'Rajib',
    'Sanjay',
    'Tripti'
];


// get data from array
$student = array_pop($students);
$student = array_shift($students);

// Adding data to array
array_push($students, 'Dinabandhu');
array_push($students, 'Hira');
array_unshift($students, 'Bhabatosh');

$n = count($students);

for($i = 0; $i <$n; $i++){
   // echo $students[$i]. "\n";
}
echo "\n \n";
// Array Remove element by 
// array_pop - removed from last element
// array_shift - removed from first element
// -------------------------------------------

// Add Element to array by array_unshift and array_push.


/**
 * Associative Array + Multidimentional Array
 * 
 */
/*
$persons = array(
    'name'  => 'Kartik Pal',
    'wife'  => 'Sabita Pal',
    'address' => 'Naharai',
    'children' => array(
        'elderson' => 'Santanu Pal',
        'smallerson' => 'Chutla Pal',
    ),
);

$name = $persons['name'];
echo $name . "\n";

echo $persons['children']['elderson'];
 */

$arr = array(
   1 => 'Hello',
   'test' => 'World',
   1.5 => 'natpune',
   true => 'plotue'
);
// print_r($arr);

$arrr = array(
    'foo' => 'Foo',
    'bar' => 'Bar',
    100   => -100,
    -100  => 100
);

var_dump($arrr);