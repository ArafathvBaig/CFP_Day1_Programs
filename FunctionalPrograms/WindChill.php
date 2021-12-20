<?php
//Note: the formula is not valid if t is larger than 50 in absolute value 
//or  if v is larger than 120 or less than 3 
//(you may assume that the values you get are in that range).
$t = 40;
$v = 50;
if($t<50 && $v>3 && $v<120)
{
    $w = 35.74 + (0.6215 * $t) + (((0.4275 * $t) - 35.75) * (pow($v, 0.16)));
    echo $w;
}
