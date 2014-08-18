<?php

date_default_timezone_set('America/Chicago');		//set default timezome
$day_of_week = date('N');							//Get Day of Week as number	 			
 													//1 (for Monday) through 7 (for Sunday)
	switch($day_of_week) {
	    case 1:
	         echo "Monday \n";
	     	break;
	    case 2:
	         echo "Tuesday \n";
	     	break;
	    case 3;
	     	echo "Wednesday \n";
	     	break;
	    case 4:
	     	echo "Thursday \n";
	     	break;
	    case 5:
	     	echo "Friday \n";
	     	break;
	    case 6:
	     	echo "Saturday \n";
	     	break;
	    case 7:
	     	echo "Sunday \n";
	     	break;
	}



 $day_of_week = date('N');							//same equation as above in if else 
 
if ($day_of_week == 1) {
		echo "Monday\n";
	}elseif($day_of_week == 2){
 		echo "Tuesday\n";
	}elseif($day_of_week == 3){
 		echo "Wednesday\n";
	}elseif($day_of_week == 4){
 		echo "Thursday\n";
	}elseif($day_of_week == 5){
 		echo "Friday\n";
	}elseif($day_of_week == 6){
 		echo "Saturday\n";
	}elseif($day_of_week == 7){
 		echo "Sunday\n";
 	}

?>