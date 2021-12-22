<?php
$n = readline('Enter a Number: ');
// Class to perform Perfect Number operations
class Perfect_Number
{
	/**
	 * Function to check the Number is Perfect Number
	 * Passing the Number as a Parameter
	 */
	function perfectNumber($n)
	{
		$sum = 0;
		for ($i = 1; $i < $n; $i++) {
			if (($n % $i) == 0) {
				$sum = $sum + $i;
			}
		}
		if ($sum == $n) {
			echo "The Number " . $n . " is a Perfect Number.";
		} else {
			echo "The Number " . $n . " is not a Perfect Number.";
		}
	}
}
// Class object and calling function using object
$obj = new Perfect_Number();
$obj->perfectNumber($n);
