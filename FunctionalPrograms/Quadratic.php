<?php
$a = 6;
$b = 11;
$c = -35;
$delta = ($b * $b) - (4 * $a * $c);
$root1 = (- $b + sqrt($delta)) / (2 * $a);
$root2 = (- $b - sqrt($delta)) / (2 * $a);
echo "Root 1: ".$root1;
echo "\nRoot 2: ".$root2;
