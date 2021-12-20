<?php
$array1 = array(1,2,-1,0,-2,3,-3,0,1,-1);
$size = count($array1);
$count = 0;
for ($i = 0; $i < $size; $i++) 
{
    for ($j = $i + 1; $j < $size; $j++)
	{
	    for ($k = $j + 1; $k < $size; $k++) 
        {
            if ($array1[$i] + $array1[$j] + $array1[$k] == 0) 
	        {
	        	$count=$count+1;
	            echo "Distinct Triplets : ".$array1[$i].", ".$array1[$j]." and ".$array1[$k]."\n";
            }
	    }
    }
}
echo "No.of Distinct Triplets: ".$count;