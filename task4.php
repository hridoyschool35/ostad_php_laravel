<?php
// Task 4: Fibonacci Series printing using a Function

print_fibonacci_numbers(15);

function print_fibonacci_numbers($total_numbers) {
    $prev = 0; 
    $next = 1;
    for($step = 0; $step < $total_numbers; $step++) {
        if($step == 0 || $step == 1) {
            echo "$step ";
            continue;
        }
        $answer = $prev + $next;
        echo "$answer ";
        $prev = $next;
        $next = $answer;
    }
}
?>