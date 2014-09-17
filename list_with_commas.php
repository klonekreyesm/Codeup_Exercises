<?php


$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//$physicisits_string = str_replace(',','', $physicists_string);


function humanized_list($physicists_array, $alphabetize=FALSE){
		//sort items alphabetically
		if ($alphabetize) {
			sort($physicists_array);									
		}
		//pop off the last item in the array
		$last_item=array_pop($physicists_array);						
		//modify last item
		$last_item="and ".$last_item;									
		//push last item back onto array with 'and'
		array_push($physicists_array, $last_item);						
		//revert array to string with single pipe delimiter
		return implode(', ', $physicists_array);						
}
//turn string into array
$physicists_array = explode(', ', $physicists_string);					

$famous_fake_physicists = humanized_list($physicists_array,FALSE);
//output result
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.". PHP_EOL.PHP_EOL;		
//output result
$famous_fake_physicists = humanized_list($physicists_array, TRUE);
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.". PHP_EOL.PHP_EOL;		


?>