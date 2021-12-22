<?php
// Getting user input
$year = readline('Enter a Year: ');
// Checking conditions for leap year
if ($year >= 1000) {
    if (($year % 100) == 0 && ($year % 400) == 0) {
        echo $year . " is a Leap Year";
    } elseif (($year % 4) == 0) {
        echo $year . " is a Leap Year";
    } else {
        echo $year . " is Not a Leap Year";
    }
} else {
    echo "Wrong Input";
}
