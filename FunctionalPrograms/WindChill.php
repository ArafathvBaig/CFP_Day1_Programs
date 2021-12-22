<?php

/**
 * Note: the formula is not valid if t is larger than 50 in absolute value 
 * or  if v is larger than 120 or less than 3 
 * (you may assume that the values you get are in that range).
 */
$t = readline('Enter t Value: ');
$v = readline('Enter v Value: ');
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
/**
 * Function to calculate windchill w
 * Checking v and t parameters of the functions
 * Returs the output based on the conditions
 */
function windChill($t, $v)
{
    if ($t < 50 && $v > 3 && $v < 120) {
        $w = 35.74 + (0.6215 * $t) + (((0.4275 * $t) - 35.75) * (pow($v, 0.16)));
        return $w;
    } else {
        return 0;
    }
}
echo "Output: " . windChill($t, $v);
