<?php
$n = 10;
$heads = 0;
$tails = 0;
if($n>0)
{
    for($i=1; $i<=$n; $i++)
    {
        $coinCheck = rand(0,1);
        echo $coinCheck."\n";
        if($coinCheck<0.5)
        {
            echo "Tails\n";
            $tails += 1;
        }
        else
        {
            echo "Heads\n";
            $heads += 1;
        }
    }
}
$percentHeads = (($heads*100)/$n);
$percentTails = (($tails*100)/$n);
echo "Number of Heads: ".$heads;
echo "\nNumber of Tails: ".$tails;
echo "\nThe Percentage of Heads is: ".$percentHeads;
echo "\nThe Percentage of Tails is: ".$percentTails;