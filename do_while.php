<?php

//Create a do-while loop that will count by 2's starting with 0 and ending at 
//Create a do-while loop that starts at 2 and displays the result a on each line while $a is less than 1,000,000
	$a=2;

		do{
			echo $a . PHP_EOL;
			$a *= $a;
		}
		while ($a<=1000000);


//Alter loop to count backwards by 5's from 100 to -10.
	$a =100;

		do{
			echo $a . PHP_EOL;
			$a -= 5;
			usleep(100000);
		}
		while ($a >= -10 );




?>