<?php
// user input for Array size and Elements
$size = readline('Enter Size of Array: ');
echo "Enter the Elements of Array: ";
for ($i = 0; $i < $size; $i++) {
	$array1[$i] = readline();
}
/**
 * Function to get sum of 3 integers adds to 0
 * Running different loops for 3 Elements
 * Returns the Distinct Triplets count
 */
function sumOf3IntAddsTo0($size, $array1)
{
	$count = 0;
	for ($i = 0; $i < $size; $i++) {
		for ($j = $i + 1; $j < $size; $j++) {
			for ($k = $j + 1; $k < $size; $k++) {
				if ($array1[$i] + $array1[$j] + $array1[$k] == 0) {
					$count = $count + 1;
					echo "Distinct Triplets : " . $array1[$i] . ", " . $array1[$j] . " and " . $array1[$k] . "\n";
				}
			}
		}
	}
	return $count;
}
echo "No.of Distinct Triplets: " . sumOf3IntAddsTo0($size, $array1);
