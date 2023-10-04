<?php
/*
Create an array called $grades with the following values: 85, 92, 78, 88, 95. 
Write a PHP function which takes "$grades" as an argument to sort the array 
in descending order and print the sorted grades as array.
*/

// Task 3: Array Sorting  

$grades = array(85, 92, 78, 88, 95);
print_reordered_grades( $grades );

function print_reordered_grades( $grades ) {
    rsort( $grades );    
    print_r( $grades );
}

?>

