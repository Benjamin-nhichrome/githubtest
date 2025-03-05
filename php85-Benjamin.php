<?php

$uitslagen = [
    ['thuis' => 'FC Twente', 'uit' => 'FC Utrecht', 'uitslag' => [0, 2]],
    ['thuis' => 'FC Twente', 'uit' => 'FC Volendam', 'uitslag' => [5, 1]],
    ['thuis' => 'FC Emmen', 'uit' => 'Feyenoord', 'uitslag' => [0, 1]],
    ['thuis' => 'Vitesse', 'uit' => 'FC Twente', 'uitslag' => [0, 0]],
];

$teller = 1;

foreach ($uitslagen as $wedstrijd) {
    $thuisploegPunten = 0;

    // Bereken punten voor de thuisploeg
    if ($wedstrijd['uitslag'][0] > $wedstrijd['uitslag'][1]) {
        $thuisploegPunten = 3;
    } elseif ($wedstrijd['uitslag'][0] == $wedstrijd['uitslag'][1]) {
        $thuisploegPunten = 1;
    }

    // Druk de output af
    echo "Wedstrijd $teller: de thuisploeg krijgt $thuisploegPunten punten\n";
    echo '<br>';

    // Verhoog de teller
    $teller++;
}

?>
