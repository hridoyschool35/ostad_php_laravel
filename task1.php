<?php
// Task 1: Looping with Increment using a Function

/*
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. 

In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. 

You must call the function to print.

Also do the same using while loop and do-while loop also.
*/



show_even_numbers_using_for(1, 20, 2);
show_even_numbers_using_while(1, 20, 2);
show_even_numbers_using_dowhile(1, 20, 2);

function show_even_numbers_using_for($start, $end, $step) {
    for ($iteration = $start; $iteration <= $end; $iteration++) {
        if ($iteration % 2 == 0) {
            echo $iteration . ' ';
        }
    }
}

function show_even_numbers_using_while($start, $end, $step) {
    $iteration = $start;
    echo "<br>";
    while ($iteration <= $end) {
        if ($iteration % 2 == 0) {
            echo $iteration . ' ';
        }
        $iteration++;
    }
}

function show_even_numbers_using_dowhile($start, $end, $step) {
    $iteration = $start;
    echo "<br>";
    do {
        if ($iteration % 2 == 0) {
            echo $iteration . ' ';
        }
        $iteration++;
    } while ($iteration <= $end);
}
?>