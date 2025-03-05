<?php
$klasgenoten = [
    "Benjamin",
    "Benny",
    "Ali",
    "Andrea",
    "Dante",
    "Joel",
    "Rapheal",
    "Zackariah",
    "Giovani",
    "Souvyein",
];

foreach ($klasgenoten as $naam) {
    if ($naam == "Benjamin") {
        echo "<strong>$naam!</strong><br>";
    } else {
        echo $naam . "<br>";
    }
}
