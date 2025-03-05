<?php

$uitslagen = [
    ['thuis' => 'FC Twente', 'uit' => 'FC Utrecht', 'uitslag' => [0, 1]],
    ['thuis' => 'FC Twente', 'uit' => 'FC Volendam', 'uitslag' => [4, 2]],
    ['thuis' => 'FC Emmen', 'uit' => 'Feyenoord', 'uitslag' => [1, 3]],
];

echo "<pre>";

foreach ($uitslagen as $wedstrijd) {
    $thuisploeg = $wedstrijd['thuis'];
    $doelpunten = $wedstrijd['uitslag'][0];

    echo "$thuisploeg scoort $doelpunten punten\n";
}

?>
