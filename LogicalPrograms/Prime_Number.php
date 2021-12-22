<?php
$n = readline('Enter a Number: ');
// Class to perform Prime Number operations and funcitons
class Prime_Number
{
	/**
	 * Function to check the Number is Prime or Not
	 * Passing the Number as Parameter
	 * Performing for loop and  if else conditions
	 */
	function prime($n)
	{
		$flag = 0;
		if (($n <= 0) || ($n == 1)) {
			echo $n . " is not a Prime Number.";
		} else if ($n == 2) {
			echo $n . " is a Even Prime Number.";
		} else {
			for ($i = 1; $i <= $n; $i++) {
				if (($n % $i) == 0) {
					$flag = $flag + 1;
				} else {
					$flag = $flag;
				}
			}
			if ($flag == 2) {
				echo $n . " is a Prime Number.";
			} else {
				echo $n . " is not a Prime Number.";
			}
		}
	}
}
// Class object and calling function using object
$obj = new Prime_Number();
$obj->prime($n);
