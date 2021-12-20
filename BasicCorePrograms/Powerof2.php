<?php
$power = 10;
if(($power>=0) && ($power<31))
{
    for($i=1; $i<=$power; $i++)
    {
        $temp = pow(2,$i);
        echo "Temp: ".$temp."\n";
    }
}
else
{
    echo "Wrong Input";
}