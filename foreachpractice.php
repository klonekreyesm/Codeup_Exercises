<?php

    $students = array(
        array('name' => 'Virginia Potts', 'age' => 29),
        array('name' => 'Elon Musk', 'age' => 42),
        array('name' => 'Rasmus Lerdorf', 'age' => 45),
        array('name' => 'Marissa Mayer', 'age' => 38)
    );
     
        foreach ($students as $student) {
            //if statement to check if array exists 
            if ( is_array($student)) {                                  
                foreach($student as $key => $value) {
                    //ucfirst capitalizes first character
                    echo "Student's " .ucfirst($key) . " is $value\n";  
                }    
            }
            else { echo "ONLY ARRAYS! \n";
            }
        }

        //divider
        echo "------------------------------------------- \n";


?>