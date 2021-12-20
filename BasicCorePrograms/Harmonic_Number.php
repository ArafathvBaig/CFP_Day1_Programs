<?php
$temp = 0;
$n = 10;
if($n>0)
{
    for($i=1; $i<=$n; $i++)
    {
        $temp += (1/$i);
    }
    echo "The Harmonic Value of ".$n."th Term is: ".$temp;
}
else
{
    echo "Wrong Input";
}