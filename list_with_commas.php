<?php



$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	function readable_list($physicists_array, $alphabetize=FALSE)
	{
		if ($alphabetize) 
		{
			asort($physicists_array);									//sort items alphabetically
		}

		$last_item=array_pop($physicists_array);						//pop off the last item in the array

		$last_item="and ".$last_item;									//modify last item

		array_push($physicists_array, $last_item);						//push last item back onto array with 'and'

		return implode(', ', $physicists_array);						//revert array to string with single pipe delimiter
	}

$physicists_array = explode(', ', $physicists_string);					//turn string into array

$famous_fake_physicists = readable_list($physicists_array,FALSE);
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.". PHP_EOL.PHP_EOL;		//output result


$famous_fake_physicists = readable_list($physicists_array, TRUE);
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.". PHP_EOL.PHP_EOL;		//output result




?>