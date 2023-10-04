<?php
// Task 3: Break on Condition

$prev = 0; 
$next = 1;
$answer = 0;

for($step = 0; $step < 10; $step++) 
{
    if($step == 0 || $step == 1) {
        echo "$step ";
        continue;
    }
    
    $answer = $prev + $next;
    if($answer > 100) break;
    echo "$answer ";
    $prev = $next;
    $next = $answer;
}
?>