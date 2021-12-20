<?php
$dividend = 10;
$divisor = 2;
if($divisor==0)
{
    echo "Divisor Can't be 0";
}
else
{
    $remainder = $dividend % $divisor;
    $quotient = $dividend / $divisor;
    echo "Quotient:: ".$quotient;
    echo "\nRemainder:: ".$remainder;
}