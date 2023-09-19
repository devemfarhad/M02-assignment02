<?php

// Function to print even numbers using for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Function to print even numbers using while loop
function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

// Function to print even numbers using do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

// Called the functions to print even numbers
echo "Using for loop function: ";
printEvenNumbersFor(2, 20, 2);

echo "\nUsing while loop function: ";
printEvenNumbersWhile(2, 20, 2);

echo "\nUsing do-while loop function: ";
printEvenNumbersDoWhile(2, 20, 2);
