<?php

    //set  a start variable $number; while this condition is met; incrementor - increment number each loop
    for ($number=0; $number <= 100; $number++){ 

        if($number % 3 == 0 && $a % 5 == 0){
                echo "$number FizzBuzz".PHP_EOL;
        }
        // if the divisble of 3 is remainder 0 print FIZZLE
            if ($number % 3 == 0){                  
                echo "FIZZle".PHP_EOL;
            }
        //elseif the divisible of 5 is remainder 0 print Buzz-izzle
            elseif ($number % 5 == 0){              
                echo "Buzz-izzle";.PHP_EOL;
            }
        //if it is neither, just print the number 
            else {                                  
                echo "$number".PHP_EOL;
            }
    }
?>