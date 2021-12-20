<?php
$year = 2022;
if($year>=1000)
{
    if(($year%100)==0 && ($year%400)==0)
    {
        echo $year." is a Leap Year";
    }
    elseif (($year%4)==0)
    {
        echo $year." is a Leap Year";
    }
    else
    {
        echo $year." is Not a Leap Year";
    }
}
else
{
    echo "Wrong Input";
}