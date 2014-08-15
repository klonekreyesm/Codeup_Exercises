<?php




fwrite(STDOUT, "please enter starting number: ");	//output and get starting number
	$startNum = trim(fgets(STDIN));					//user enters starting number (trim to fix "enter" in keyboard for new line)

fwrite(STDOUT,"please enter ending number: ");		//output and get ending number
	$endNum = trim(fgets(STDIN));					//user enters ending number (trim to fix "enter")

fwrite(STDOUT,"choose an amount to count by: ");	//output and and ask user to ask for amount to count by
	$counter = trim(fgets(STDIN));



		for ($i=$startNum; $i <= $endNum; $i*=$counter) {	//FOR loop; starting variable; while variable is less than end number; incrementor by amount entered by user

		echo "$i\n";										//output variable
		usleep(500000);}									//pause



?>





