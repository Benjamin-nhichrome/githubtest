<?php
function welkom2($tekst, $naam, $hoofdletters = FALSE ) {
    if ($tekst == 1) {
        $uitvoer = 'Welkom '. $naam;
    }
    elseif ($tekst == 2) {
        $uitvoer = 'Tot ziens, '.$naam;
    }
    if ($hoofdletters == TRUE) {
        $uitvoer = strtoupper($uitvoer);
    }

    return $uitvoer;
}
echo welkom2(1, "Benji") . "<br>";
?>
