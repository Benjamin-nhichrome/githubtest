<?php

// vul waarden in voor de volgende variabelen
$temperatuur= 28;
$prijsBestelling= 45;  // bepaal de korting
// Bepaal de bezorgkosten
if ($prijsBestelling > 40) 
    $bezorgkosten = 0;
 else 
    $bezorgkosten = 4;
// bepaal de $bezorgkosten
if ($prijsBestelling > 40) 
    $bezorgkosten = 0;
// Bepaal de korting op basis van de temperatuur
if ($temperatuur > 21 && $temperatuur <= 25) {
    $korting = $prijsBestelling * 0.10;
} elseif ($temperatuur > 25 && $temperatuur <= 30) {
    $korting = $prijsBestelling * 0.15;
} elseif ($temperatuur > 30) {
    $korting = $prijsBestelling * 0.20;
} else {
    $korting = 0;
}
// druk resultaat af
echo "Bedrag bestelling: $prijsBestelling";
echo "<br>";
echo "Temperatuur dit weekend: $temperatuur";
echo "<br>";
echo "Korting: $korting";
echo "<br>";
echo "Bezorgkosten: $bezorgkosten";
echo "<br>";
echo "<br>";
echo "Eindbedrag: ".$prijsBestelling-$korting+$bezorgkosten;
?>