<?php
 
$uitslagen=[
['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag'=> [1,2] ],
['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,3] ],
['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag'=> [1,2] ],
['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,3] ],
['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [3,1] ],
['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag'=> [2,3] ],
['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Willem I', 'uit' => 'FC Utrecht', 'uitslag'=> [3,0] ],
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,1] ],
 
['thuis' => 'Ajax', 'uit' => 'sc Heerenveen', 'uitslag'=> [5,0] ],
['thuis' => 'RKC Waalwijk', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
['thuis' => 'Fortuna Sittard', 'uit' => 'Vitesse', 'uitslag'=> [1,2] ],
['thuis' => 'Sparta Rotterdam', 'uit' => 'PEC Zwolle', 'uitslag'=> [2,0] ],
['thuis' => 'Go Ahead Eagles', 'uit' => 'Feyenoord', 'uitslag'=> [0,1] ],
['thuis' => 'SC Cambuur', 'uit' => 'Willem I', 'uitslag'=> [1,1] ],
['thuis' => 'PSV', 'uit' => 'N.E.C.', 'uitslag'=> [3,2] ],
['thuis' => 'FC Twente', 'uit' => 'FC Groningen', 'uitslag'=> [3,0] ],
['thuis' => 'FC Utrecht', 'uit' => 'AZ', 'uitslag'=> [2,2] ],
 
['thuis' => 'Feyenoord', 'uit' => 'PSV', 'uitslag'=> [2,2] ],
['thuis' => 'AZ', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Vitesse', 'uit' => 'sc Heerenveen', 'uitslag'=> [1,2] ],
['thuis' => 'N.E.C.', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [1,0] ],
['thuis' => 'FC Groningen', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,2] ],
['thuis' => 'PEC Zwolle', 'uit' => 'FC Utrecht', 'uitslag'=> [1,1] ],
['thuis' => 'Willem I', 'uit' => 'Heracles Almelo', 'uitslag'=> [4,0] ],
['thuis' => 'FC Twente', 'uit' => 'Fortuna Sittard', 'uitslag'=> [1,2] ],
['thuis' => 'SC Cambuur', 'uit' => 'RKC Waalwijk', 'uitslag'=> [0,0] ],
 
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,0] ],
 
];
 
 
echo "<html>";
echo "<head>";
echo "<link rel='stylesheet' type='text/css' href='voetbal challenge 2.css'>";
echo "</head>";  
echo "<body>";
 
echo "<table border=1>";
echo "<tr><th>Thuis</th><th>Uit</th><th></th><th></th></tr>";
 
foreach ($uitslagen as $uitslag) {
    echo "<tr>";
    echo "<td>".$uitslag['thuis']."</td>";
    echo "<td>".$uitslag['uit']."</td>";
    echo "<td>".$uitslag['uitslag'][0]."</td>";
    echo "<td>".$uitslag['uitslag'][1]."</td>";
    echo "</tr>";
}
 
echo "</table>";
 
$punten=[];
$gespeeld=[];
 
foreach ($uitslagen as $uitslag) {
    $homeClub = $uitslag['thuis'];
    $awayClub = $uitslag['uit'];
    $homeScore = $uitslag['uitslag'][0];
    $awayScore = $uitslag['uitslag'][1];
 
    // Initialize points and matches played if not already set
    if (!isset($punten[$homeClub])) {
        $punten[$homeClub] = 0;
        $gespeeld[$homeClub] = 0;
    }
 
    if (!isset($punten[$awayClub])) {
        $punten[$awayClub] = 0;
        $gespeeld[$awayClub] = 0;
    }
 
    // Calculate points
    if ($homeScore > $awayScore) {
        $punten[$homeClub] += 3;
    } elseif ($awayScore > $homeScore) {
        $punten[$awayClub] += 3;
    } else {
        $punten[$homeClub]++;
        $punten[$awayClub]++;
    }
 
    // Increase number of matches played
    $gespeeld[$homeClub]++;
    $gespeeld[$awayClub]++;
}
 
// Sort the results by points
arsort($punten);
 
echo "<table border=1>";
echo "<tr><th>Club</th><th>Punten</th><th>Gespeeld</th></tr>";
 
foreach ($punten as $club => $points) {
    echo "<tr>";
    echo "<td>" . $club . "</td>";
    echo "<td>" . $points . "</td>";
    echo "<td>" . $gespeeld[$club] . "</td>";
    echo "</tr>";
}
 
echo "</table>";
 
echo "</body>";
echo "</html>";
 
