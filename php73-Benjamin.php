<?php
function mijnFunctie($a, $b, $c) {
    // maak hier de code voor jouw functie 
    $som = $a + $b + $c;
    if ($som >= 10) {
        return 1;
    }
    // som kleiner dan 10 groter dan 0
    if ($som < 10 && $som > 0) {
        return 0;
    }
    if ($som == 0) {
        return -1;
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
 echo "<br>";
 echo "mijnFunctie(2,4,2): ";
 echo mijnFunctie(2,4,2);


 ?>