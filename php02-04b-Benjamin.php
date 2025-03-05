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

for ($dagNummer = 1; $dagNummer <= count($metingenWeek); $dagNummer++) {
    $dag = $metingenWeek[$dagNummer - 1];
    echo "Dag " . $dagNummer . ":<br>";
    echo "  dagdeel " . $dag[0] . "<br>";
    echo "  dagdeel " . $dag[1] . "<br>";
    echo "  dagdeel " . $dag[2] . "<br>";
    echo "  hoogste waarde is " . max($dag) . "<br>";
    echo "<br>";
}
