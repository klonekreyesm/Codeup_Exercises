<?php
    
     //Create a variable $test equal to 5.
    $test = 5;
    //Create a while loop that checks $test <= 15 and increment $test by 1 inside the loop.
    while ($test <= 15) {
        //Before incrementing $test, output each iteration (echo $test with newline) and display results.
        echo $test . PHP_EOL;
        $test++;
        usleep(50000);
    }


?>