<?php

        
        function add($a,$b){	
			if (is_numeric($a) && is_numeric($b)) {					//define addition function
			echo $a + $b. PHP_EOL;
			usleep (500000);
			}else {
        	echo "ERROR: Both arguments must be numbers".PHP_EOL;
    		}
		}
		function subtract($a,$b){									//define subtraction function
			if (is_numeric($a) && is_numeric($b)){									
			echo $a - $b. PHP_EOL;
			usleep (500000);
			}else {
        	echo "ERROR: Both arguments must be numbers".PHP_EOL;
    		}
		}
		function multiply($a,$b){									//define multiplication function
			if(is_numeric($a) && is_numeric($b)){
			echo $a * $b. PHP_EOL;
			usleep (500000);
			}else{
			echo "ERROR: Both arguments must be numbers".PHP_EOL;
			}
		}
		function divide ($a,$b){									//define division function
			if(is_numeric($a) && is_numeric($b)){
				if($b == 0){
					echo "ERROR: Not divisible by 0.".PHP_EOL;
				}else{
					echo $a / $b. PHP_EOL;
					usleep (500000);
				}
			}else{
			echo "ERROR: Both arguments must be numbers".PHP_EOL;
			}
		}
	 	function remainder($a,$b){									//define modulus function
	 		if (is_numeric($a) && is_numeric($b)){
	 			if($b == 0){
					echo "ERROR: Not divisible by 0";				
				}else{
					echo $a % $b. PHP_EOL;
					usleep (500000);
				}
			}else{
			echo "ERROR: Both arguments must be numbers".PHP_EOL;
			}

		}




	add(2,3);									//test functions
	subtract(3,1);
	multiply(2,3);
	divide(2,3);
	remainder(10,3);
	add('Low',0);
	subtract ('Low','test');
	remainder (12,'test');
	divide(12,0);
	remainder (3,0);


	
		


?>

