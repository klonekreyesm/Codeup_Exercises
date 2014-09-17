<?php


    $nothing = NULL;
    $something = '';
    $array = array(1,2,3);


        function check($variable) {
            //are you a set of data?
            if (isset($variable)) {  
                return "The variable is SET".PHP_EOL; 
            }   //are you empty?
            elseif (empty($variable)) {                  
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