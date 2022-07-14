<?php

function get_strlen( $item ) {
    return $item . "\t" . strlen( $item );
}

$str = ['Apple', 'Banna', 'Orange', 'Coconut'];

$lenght = array_map( 'get_strlen', $str );

// print_r( $lenght );

function ask( $str ) {
    return $str . " ?";
}

function explain_me( $str ) {
    return $str . "!";
}

// $words = 'Hello World';
function print_formated_data( $str, $formate ) {
    return $formate( $str );
}

$questan = print_formated_data( 'Hello World', 'ask' );

// echo $questan;

// Excaption

function devide( $devide, $devider ) {

    if ( $devider === 0 ) {
        throw new Exception( 'Devider must be grater than 0' );
    }

    return $devide / $devider;

}

try {
    echo devide( 6, 0 );
} catch ( Exception $e ) {
    echo $e->getMessage();
} finally {
    echo "\n \nProcess Complete";
}

//
echo "\n\n";

// PHP FIlter

$str = "<h2>Hello World</h2>";

echo filter_var( $str, FILTER_SANITIZE_SPECIAL_CHARS );