<?php
//Create a variable $test equal to 5.
//Create a while loop that checks $test <= 15 and increment $test by 1 inside the loop. 
//Before incrementing $test, output each iteration (echo $test with newline) and display results.
	$test = 5;

	while ($test <= 15){
		echo $test . PHP_EOL;
		$test++;
		usleep(50000);
	}


?>