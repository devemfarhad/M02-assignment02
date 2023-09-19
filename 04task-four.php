<?php
function printFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    if ($count >= 1) {
        echo $num1 . " ";
    }
    if ($count >= 2) {
        echo $num2 . " ";
    }

    for ($i = 2; $i < $count; $i++) {
        $nextFib = $num1 + $num2;
        echo $nextFib . " ";
        $num1 = $num2;
        $num2 = $nextFib;
    }
}


printFibonacci(15);