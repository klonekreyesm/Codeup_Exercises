<?php


//$numbers = array(1,2,3,4,5);

//foreach ($numbers as $value){

//	echo "\$number has a value of {$value}\n";
	
//}

// $animal_types = array('dogs', 'cats', 'birds', 'narwhals');

// foreach ($animal_types as $animal) {
	
//     echo "Old McDonald had a farm, and on that farm he raised some {$animal}\n";
//     usleep(500000);

// }




//$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6); //sets array of what we want to run in loop

// foreach ($data as $datum) {										  // foreach loop sets the array to represent an element in the array

//     if (is_numeric($datum)) {									// if the variable is numeric echo out this is a number
// 		echo "{$datum} is a number\n";	
// } 
// 	else if (is_string($datum)) {								// else if the variable is a string echo this is a string
//         echo "{$datum} is a string\n";
//     }
// }




// $things = array('Sgt.Pepper', 11, null, array (1,2,3), 3.14, "12+7", false, (string)11);

// foreach($things as $data){

// 	if(is_integer($data)) {							
// 			echo "$data is a number.\n";
// 			usleep(500000);
// 		}

// 	else if (is_float($data)){
// 			echo "$data is a float. \n";
// 			usleep(500000);
// 		}
// 	else if (is_bool($data)){
// 			echo "$data is boolean.\n";
// 			usleep(500000);
// 		}
// 	else if (is_array($data)){
// 			echo "$data is an array.\n";
// 			usleep(500000);
// 		}
// 	else if (is_null($data)){
// 			echo null ."\n";
// 			usleep(500000);
// 		}
// 	else if(is_string($data)){
// 			echo "$data is a string.\n";
// 			usleep(500000);
// 		}

	
// 	}

$things = array('Sgt.Pepper', 11, null, array(1,2,3), 3.14, "12+7", false, (string)11);//set array to variable

foreach($things as $data){

	if(is_scalar($data)){

		if(is_integer($data)) {							
				echo $data."\n";
				usleep(500000);
			}
		else if (is_float($data)){
				echo $data."\n";
				usleep(500000);
			}
		else if (is_bool($data)){
				echo $data."\n";
				usleep(500000);
			}
		else if (is_array($data)){
				echo print_r."\n";
				usleep(500000);
			}
		else if (is_null($data)){
				echo null ."\n";
				usleep(500000);
			}
		else if(is_string($data)){
				echo $data ."\n";
				usleep(500000);
			
	}
}
	else {
		echo null ."\n";
		usleep(50000);
	}
}
	








?>