<?php

    // Create a function called daysOfMonth.
    // Pass a month e.g. 'January' to the function. 
    // Use other months to test your function.
    // Expected output:

        // January has 31 days in it.
        // February has 28 days in it. (Unless it is leap year, then return 29)
        //     and so on...

//set array of month names for a given year
    $month = ['January',
              'February',
              'March',
              'April',
              'May',
              'June',
              'July',
              'August',
              'September',
              'October',
              'November',
              'December'
              ];

    // given the variable $year  
    $year = 2014; 
        
    //create a daysOfMonth function to pass each month thru
    //changing the value of $year should check for leap year
    function daysOfMonth($monthNum, $year) {
        $monthNum++;
        // calculate number of days in given month and year
        $days = cal_days_in_month(CAL_GREGORIAN, $monthNum, $year);
        return $days;
    } 
        //title with inserted year 
        echo PHP_EOL."** Number of Days in Each Month for {$year} **". PHP_EOL."-------------------------------------------".PHP_EOL;
        
        //create loop to pass each month thru the daysOfMonth function
        foreach ($month as $monthNum => $monthName) {
            if ($monthNum <=12) {   
                echo $monthName. " has " . daysOfMonth($monthNum, $year)." days.". PHP_EOL;
            }
        }

?>