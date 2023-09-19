<?php
$num1 = 0;
$num2 = 1;

echo $num1 . " " . $num2 . " ";

for ($i = 2; $i < 10; $i++) {
    $nextFib = $num1 + $num2;

    if ($nextFib > 100) {
        break;
    }

    echo $nextFib . " ";

    $num1 = $num2;
    $num2 = $nextFib;
}