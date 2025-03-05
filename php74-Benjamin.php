<?php

//Benjamin Adusu   17th november 2023
# [2,3,4]
function mijnFunctie($array) {
    $som = 0;
    foreach ($array as $item) {
        $som += $item;
    }
    return $som;
}

 echo "mijnFunctie([3,2,1]): ";
 echo mijnFunctie([3,2,1]);
 echo "<br>";
 echo "mijnFunctie([1,12,3,2,1]): ";
 echo mijnFunctie([1,12,3,2,1]);
 echo "<br>";
 echo "mijnFunctie([1,12,3,1,2,1]): ";
 echo mijnFunctie([1,12,3,1,2,1]);
 echo "<br>";
 echo "mijnFunctie([2,4]): ";
 echo mijnFunctie([2,4]);
 echo "<br>";
 echo "mijnFunctie([4]): ";
 echo mijnFunctie([4]);
 echo "<br>";


 ?>