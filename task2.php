<?php

// Task 2: Skip Multiples of 5

for($step = 1; $step <= 50; $step++) {
    if($step % 5 == 0) continue;
    echo $step . " ";
}
?>