<?php

/* $number = 1;

while ($number<100){
		if($number % 3 == 0){
			echo "FIZZle\n";
		}

		elseif($number % 5 == 0){
			echo "Buzz-izzle\n";
		}
		else {
			echo "$number\n";
			}

			$number++;

	}
*/

	for ($number=0; $number <= 100; $number++){ //set start variable; while this condition is met; incrementor

		if($number % 3 == 0 && $a % 5 == 0){
			echo "$number FizzBuzz\n";
		}
		if ($number % 3 == 0){					// if the divisble of 3 is remainder 0 print FIZZLE
			echo "FIZZle\n";
		}
		elseif ($number % 5 == 0){				//elseif the divisible of 5 is remainder 0 print Buzz-izzle
			echo "Buzz-izzle\n";
		}
		else {									//if it is neither, just print the number 
			echo "$number\n";
		}
		}
?>