<?php
// Get User Input for Number of Flips and Variables to store count
$n = readline('Enter No Of Times to Flip Coin: ');
$heads = 0;
$tails = 0;
if ($n > 0) {
    // Running the loop
    for ($i = 1; $i <= $n; $i++) {
        $coinCheck = rand(0, 1);
        if ($coinCheck < 0.5) {
            $tails += 1;
        } else {
            $heads += 1;
        }
    }
}
// Calculating Percentage of Heads and Tails
$percentHeads = (($heads * 100) / $n);
$percentTails = (($tails * 100) / $n);
echo "Number of Heads: " . $heads;
echo "\nNumber of Tails: " . $tails;
echo "\nThe Percentage of Heads is: " . $percentHeads;
echo "\nThe Percentage of Tails is: " . $percentTails;
