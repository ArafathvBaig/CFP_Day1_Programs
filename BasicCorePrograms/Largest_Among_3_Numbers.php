<?php
// Getting input from user
$num1 = readline('Enter First Number: ');
$num2 = readline('Enter Second Number: ');
$num3 = readline('Enter Third Number: ');
// Checking conditions for largest number
if (($num1 > $num2) && ($num1 > $num3)) {
    echo $num1 . " is Greater than " . $num2 . " and " . $num3;
} elseif (($num2 > $num1) && ($num2 > $num3)) {
    echo $num2 . " is Greater than " . $num1 . " and " . $num3;
} else {
    echo $num3 . " is Greater than " . $num1 . " and " . $num2;
}
