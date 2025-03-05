<?php

$uitslagen = [
    ['thuis' => 'FC Twente', 'uit' => 'FC Utrecht', 'uitslag' => [0, 1]],
    ['thuis' => 'FC Twente', 'uit' => 'FC Volendam', 'uitslag' => [4, 2]],
    ['thuis' => 'FC Emmen', 'uit' => 'Feyenoord', 'uitslag' => [1, 3]],
    ['thuis' => 'Vitesse', 'uit' => 'FC Twente', 'uitslag' => [1, 1]],
];

echo "<pre>";

foreach ($uitslagen as $wedstrijd) {
    if ($wedstrijd['thuis'] == 'FC Twente') {
        $doelpunten = $wedstrijd['uitslag'][0];
        echo "FC Twente scoort $doelpunten punten\n";
    } elseif ($wedstrijd['uit'] == 'FC Twente') {
        $doelpunten = $wedstrijd['uitslag'][1];
        echo "FC Twente scoort $doelpunten punten\n";
    }
}

?>
