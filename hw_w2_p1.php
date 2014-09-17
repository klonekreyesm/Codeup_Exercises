<?php

// Create a function called daysOfMonth.
// Make sure you are able to pass a month e.g. 'January' to the function.  
// Use other months to test your function.
// Expected output:

// January has 31 days in it.
// February has 28 days in it. (Unless it is leap year, then return 29)
//     and so on...



//array of month names for a given year
$month = ["January",
		  "February",
		  "March",
		  "April",
		  "May",
		  "June",
		  "July",
		  "August",
		  "September",
		  "October",
		  "November",
		  "December"];

	// given the variable $year	 
		$year = 2014; 
		
	//create a daysOfMonth function to pass each month through
	//changing the value of $year should check for leap year
	function daysOfMonth($monthNum, $year)
	{
		$monthNum++;
		// calculate number of days in given month and year
		$days = cal_days_in_month(CAL_GREGORIAN, $monthNum, $year);
		return $days;
	} 


	echo "Number of Days in Each Month for {$year}". PHP_EOL."----------------------------------------".PHP_EOL;
	

	//created loop to pass each month thru the daysOfMonth function
	foreach ($month as $monthNum => $monthName)
	{
		if ($monthNum <=12)
		{	

			echo $monthName. " has " . daysOfMonth($monthNum, $year)." days.". PHP_EOL;
 
		}
	}


 
?>