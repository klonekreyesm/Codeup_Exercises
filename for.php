<?php

        //output and get starting number
        fwrite(STDOUT, "please enter starting number: ");   
            //user enters starting number (trim to fix "enter" in keyboard for new line)
            $startNum = trim(fgets(STDIN));                 
        //output and get ending number
        fwrite(STDOUT,"please enter ending number: ");      
            //user enters ending number (trim to fix "enter")
            $endNum = trim(fgets(STDIN));                   
        //output and and ask user to ask for amount to count by
        fwrite(STDOUT,"choose an amount to count by: ");    
            $counter = trim(fgets(STDIN));


        //FOR loop; starting variable; while variable is less than end number; incrementor by amount entered by user
        for ($i=$startNum; $i <= $endNum; $i*=$counter) {   
        //output variable
        echo "$i\n";
        //pause                                     
        usleep(500000);}                                    

?>





