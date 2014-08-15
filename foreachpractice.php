<?php

$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);
     
 //echo $students[1]['name'];    								//echos one string with one name




foreach ($students as $student) {
//echo $student['name']. "\n";									//echos all names
	
	if (is_array($student)){									//if statement to check if it is array

	foreach($student as $key => $value){
		echo "Student's " .ucfirst($key) . " is $value\n";	}   //ucfirst capitalizes first character 
}

	else {

		echo "ONLY ARRAYS! \n";

	}



 //echo "{$student['name']} is {$student['age']} years old.\n";
}


echo "------------------------------------------- \n";

//end of students exercise 


//new exercise on FOREACH PRACTICE













?>