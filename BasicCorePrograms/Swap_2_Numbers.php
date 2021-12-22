<?php
// user input of two number to swap
$num1 = readline('Enter First Number: ');
$num2 = readline('Enter Second Number: ');
echo "Before Swap:";
echo "\nNum 1: " . $num1;
echo "\nNum 2: " . $num2;
$temp = $num1;
$num1 = $num2;
$num2 = $temp;
echo "\nAfter Swap:";
echo "\nNum 1: " . $num1;
echo "\nNum 2: " . $num2;
