<?php

/**
 * Own implementation for power function 
 * Passing parameters of number and its power and 
 * checking the valid power conditions
 */
function power($num, $power)
{
    if ($power == 1) {
        return $num;
    } elseif ($power == 0) {
        return 0;
    } else {
        $temp = $num;
        for ($i = 1; $i < $power; $i++) {
            $temp = $temp * $num;
        }
        return $temp;
    }
}
// Getting user input for power
$power = readline('Enter a Number: ');
// Checking conditions and running loop
if (($power >= 0) && ($power < 31)) {
    for ($i = 1; $i <= $power; $i++) {
        $temp = power(2, $i);
        echo "Temp: " . $temp . "\n";
    }
} else {
    echo "Wrong Input";
}
