<?php
$n = readline('Enter Nth Value: ');
$n1 = 0;
$n2 = 1;
// Class to get the Fibonacci Series
class Fibonacci_Series
{
    /** 
     * Function to perform the Fibonacci Series Operations
     * Parameters of n, n1, and n2 are passed
     */
    function fibonacci($n, $n1, $n2)
    {
        if ($n == 0) {
            echo $n1;
        } elseif ($n == 1) {
            echo $n1 . " " . $n2;
        } elseif ($n >= 3) {
            echo $n1 . " " . $n2 . " ";
            for ($i = 3; $i <= $n; $i++) {
                $count = $n1 + $n2;
                $n1 = $n2;
                $n2 = $count;
                echo $count . " ";
            }
        } else {
            echo "Wrong Input";
        }
    }
}
// Class object and calling function using object
$obj = new Fibonacci_Series();
$obj->fibonacci($n, $n1, $n2);
