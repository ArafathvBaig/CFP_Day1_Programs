<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;
if(($num1>$num2) && ($num1>$num3))
{
    echo $num1." is Greater than ".$num2." and ".$num3;
}
elseif(($num2>$num1) && ($num2>$num3))
{
    echo $num2." is Greater than ".$num1." and ".$num3;
}
elseif(($num3>$num2) && ($num3>$num1))
{
    echo $num3." is Greater than ".$num1." and ".$num2;
}
elseif(($num1==$num2) && ($num1>$num3))
{
    echo $num1." is Greater than ".$num3." and Equal to ".$num2;
}
elseif(($num1>$num2) && ($num1==$num3))
{
    echo $num1." is Greater than ".$num2." and Equal to ".$num3;
}
elseif(($num2==$num1) && ($num2>$num3))
{
    echo $num2." is Greater than ".$num3." and Equal to ".$num1;
}
elseif(($num2>$num1) && ($num2==$num3))
{
    echo $num2." is Greater than ".$num1." and Equal to ".$num3;
}
elseif(($num3==$num1) && ($num3>$num2))
{
    echo $num3." is Greater than ".$num2." and Equal to ".$num1;
}
elseif(($num3>$num1) && ($num3==$num2))
{
    echo $num3." is Greater than ".$num1." and Equal to ".$num2;
}
else
{
    echo $num1.", ".$num2." and ".$num3." are Equal.";  
}
