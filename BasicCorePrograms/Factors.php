<?php
// Getting input from user
$n = readline('Enter a Number: ');
// Running loops and Checking Conditions
for ($i = 2; $i < $n; $i++) {
    while ($n % $i == 0) {
        echo $i . " ";
        $n = $n / $i;
    }
}
if ($n > 2) {
    echo $n;
}
