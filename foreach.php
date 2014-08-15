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




$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);

foreach ($data as $datum) {

    if (is_numeric($datum)) {
		echo "{$datum} is a number\n";
} 
	else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    }
}











?>