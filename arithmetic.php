<?php


	function add($a,$b){						//define addition function
		echo $a + $b. PHP_EOL;
		usleep (500000);
	}
	function subtract($a,$b){					//define subtraction
		echo $a - $b. PHP_EOL;
		usleep (500000);
	}
	function multiply($a,$b){					//define multiplication
		echo $a * $b. PHP_EOL;
		usleep (500000);
	}
	function divide ($a,$b){					//define division
		echo $a / $b. PHP_EOL;
		usleep (500000);
	}
	 function remainder($a,$b){					//define modulus
		echo $a % $b. PHP_EOL;
		usleep (500000);
	}


	add(2,3);									//test functions

	subtract(3,1);

	multiply(2,3);

	divide(2,3);

	remainder(10,3);



?>

