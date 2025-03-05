<?php
function mijnFunctie($a, $b, $c) {
    // maak hier de code voor jouw functie 
    if ( $a == 0 || $b == 0 || $c == 0 ) {
        return 0;
     } else {
        $uitkomst = $a + $b + $c;
return $uitkomst;
     }
    }
 
 echo "mijnFunctie(3,2,1): ";
 echo mijnFunctie(3,2,1);
 echo "<br>";
 echo "mijnFunctie(1,12,3): ";
 echo mijnFunctie(1,12,3);
 echo "<br>";
 echo "mijnFunctie(0,4,0): ";
 echo mijnFunctie(0,4,0);
 echo "<br>";
 echo "mijnFunctie(7,0,3): ";
 echo mijnFunctie(7,0,3);
 echo "<br>";
 echo "mijnFunctie(0,0,0): ";
 echo mijnFunctie(0,0,0);
 
 ?>