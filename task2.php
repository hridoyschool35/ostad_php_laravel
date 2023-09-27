<?php
/*
Create an array called $numbers containing the numbers 1 to 10. 
Write a PHP function which takes the "$numbers" array as an argument 
to remove the even numbers from the array and print the resulting array.
*/

// Task 2: Array Manipulation

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
remove_even_numbers( $numbers );

function remove_even_numbers( $numbers ) {
    $new_numbers = array_filter( $numbers, function( $number ) {
        if( $number % 2 != 0 ) return $number;
    } );

    foreach( $new_numbers as $number ) {
        echo $number . ' ';
    }
}

?>

