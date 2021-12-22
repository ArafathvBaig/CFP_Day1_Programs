<?php
$n = readline('Enter a Number: ');
$temp = $n;
// Class to perform Reverse of a number operation
class Reverse
{
	/**
	 * Function to get Reverse of a Number
	 * Passing temp as parameter which has the number
	 * Returns the reverse of the number
	 */
	function reverse($temp)
	{
		$rev = 0;
		while ($temp > 0) {
			$r = $temp % 10;
			$rev = ($rev * 10) + $r;
			$temp = floor($temp / 10);
		}
		return $rev;
	}
}
// Class object and calling function using object
$obj = new Reverse();
echo "The Reverse of the Number " . $n . " is: " . $obj->reverse($temp);
