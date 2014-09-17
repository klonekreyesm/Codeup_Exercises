<?php
    //Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
    //Use the 2 example arrays and make sure your solution uses array_search().

    // array of first names
    $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];   
    // array to compare to
    $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

    function compare_arrays ($array1,$array2) {
        $i=0;

        foreach($array as $name) {
            if (truefalse($name,$array2)) {
                $i++;
            }
        }
        return $i;
    }

    function truefalse($name, $array) {
        $result = array_search($name, $array);
        if ($result ===false) {
            $thing = false;
        }else {
            $thing = true;
        }
            return $thing;
    }

    echo compare_arrays($names,$compare) . PHP_EOL

?>



