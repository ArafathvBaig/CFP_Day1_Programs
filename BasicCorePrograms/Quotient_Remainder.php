<?php
// User input for Dividend and Divisor
$dividend = readline('Enter Dividend: ');
$divisor = readline('Enter Divisor: ');
// Checking conditions and calculating remainder and quotient
if ($divisor == 0) {
    echo "Divisor Can't be 0";
} else {
    $remainder = $dividend % $divisor;
    $quotient = $dividend / $divisor;
    echo "Quotient:: " . $quotient;
    echo "\nRemainder:: " . $remainder;
}
