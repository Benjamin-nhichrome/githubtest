<?php
function breekAf($n, $string) {
    if (strlen($string) <= $n) {
        return $string;
    }


    $shortString = substr($string, 0, $n);

    if ($string[$n] === ' ') {
        return $shortString;
    }

    $lastSpace = strrpos($shortString, ' ');

    if ($lastSpace === false) {
        return '';
    }

    return substr($shortString, 0, $lastSpace);
}

// Test cases
echo breekAf(32, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(18, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(19, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(20, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(11, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(24, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(3, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
echo breekAf(200, "Deze student is erg goed in programmeren in PHP") . "<br>"; 
?>
