<?php
$temp = 0;
// Get input from user
$n = readline('Enter a Number: ');
// Check conditions and running loop
if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $temp += (1 / $i);
    }
    echo "The Harmonic Value of " . $n . "th Term is: " . $temp;
} else {
    echo "Wrong Input";
}
