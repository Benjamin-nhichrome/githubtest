<?php
$metingenWeek = [
    [14, 11, 12],
    [6, 11, 11],
    [7, 12, 14],
    [9, 14, 13],
    [10, 15, 13],
    [11, 15, 14],
    [13, 16, 14]
];

// Probleem 1: Start de dagNummer vanaf 1 en gebruik een for-loop om elke dag af te drukken.
for ($dagNummer = 1; $dagNummer <= count($metingenWeek); $dagNummer++) {
    $dag = $metingenWeek[$dagNummer - 1];
    echo "Dag " . $dagNummer . "<br>";
    echo "'s ochtends: " . $dag[0] . "<br>";
    echo "'s middags: " . $dag[1] . "<br>";
    echo "'s avonds: " . $dag[2] . "<br>";
    echo "<br>";
}

