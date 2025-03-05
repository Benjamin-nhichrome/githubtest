<?php
function begroeting($naam) {
    $uur = date("H");
    
    if ($uur < 12) {
        $boodschap = "Goedemorgen";
    } elseif ($uur >= 12 && $uur < 18) {
        $boodschap = "Goedemiddag";
    } else {
        $boodschap = "Goedenavond";
    }
    
    return $boodschap . " " . $naam;
}

echo begroeting("Vasco") . "<br>"; 
echo begroeting("Jesse") . "<br>"; 
echo begroeting("Nadir") . "<br>"; 


?>
