<?php


	
	$nothing = NULL;
	$something = '';
	$array = array(1,2,3);

function check($variable){
		if (isset($variable)){
		return "The variable is SET".PHP_EOL; 
		}elseif (empty($variable)){
		return "The variable is empty".PHP_EOL;
		}
	}

	
	echo check($nothing);
	echo check($something);
	echo check($array);

	$serialize_array = serialize($array);
	var_dump ($serialize_array);
	var_dump ($array);
	






















?>