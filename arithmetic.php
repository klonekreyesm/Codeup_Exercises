<?php

        //define addition function
        function add($a,$b){	
			if (is_numeric($a) && is_numeric($b)) {					
				return $a + $b. PHP_EOL;
				usleep (500000);
			}
			else {
        		echo "ERROR: Both arguments must be of numberic value".PHP_EOL;
    		}
		}
		//define subtraction function
		function subtract($a,$b){									
			if (is_numeric($a) && is_numeric($b)){									
				return $a - $b. PHP_EOL;
				usleep (500000);
			}
			else{
        		echo "ERROR: Both arguments must be of numeric value".PHP_EOL;
    		}
		}
		//define multiplication function
		function multiply($a,$b){									
			if(is_numeric($a) && is_numeric($b)){
				return $a * $b. PHP_EOL;
				usleep (500000);
			}
			else{
				echo "ERROR: Both arguments must be of numeric value".PHP_EOL;
			}
		}
		//define division function
		function divide ($a,$b){									
			if(is_numeric($a) && is_numeric($b)){
				if($b == 0){
					echo "ERROR: FALSE".PHP_EOL;
				}
				else{
					return $a / $b. PHP_EOL;
					usleep (500000);
				}
			}
			else{
				echo "ERROR: Both arguments must be of numeric value".PHP_EOL;
			}
		}
		//define modulus function
	 	function remainder($a,$b){									
	 		if (is_numeric($a) && is_numeric($b)){
	 			if($b == 0){
					echo "ERROR: FALSE".PHP_EOL;			
				}
				else{
					return $a % $b. PHP_EOL;
					usleep (500000);
				}
			}
			else{
				echo "ERROR: Both arguments must be of numeric value".PHP_EOL;
			}
		}
	//test code by executing 
	echo add(0,1);												
	echo subtract(3,1);					
	echo $add_and_then_subtract;



	echo multiply(1,3);					
	echo divide(8,2);
	echo remainder(40,3);
	echo add('Low',0);
	echo subtract ('Low','test');
	echo remainder (12,'test');
	echo divide(12,0);
	echo remainder (3,0);

	





	

?>

