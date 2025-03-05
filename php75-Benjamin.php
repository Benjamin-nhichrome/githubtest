<?php
function berekenScore($uitslagen) {
  // bereken score
  $punten = 0;
  foreach ($uitslagen as $uitslag) {
    echo "uitslag:" . $uitslag[0] . "-" . $uitslag[1];
    echo "<br>";
    if ($uitslag[0] > $uitslag[1]) {
      $punten = $punten + 3;
    } elseif ($uitslag[0] == $uitslag[1]) {
      $punten = $punten + 1;
    } elseif ($uitslag[0] < $uitslag[1]) {
      $punten = $punten + 0;
    }
  }
 
  return $punten;
}
 
echo berekenScore([[1,3], [4,0], [0,0], [1,1], [0,2]]);
echo "<br>";
echo berekenScore([[1,1], [0,0], [0,2], [1,1], [0,2]]);
echo "<br>";
echo berekenScore([[1,1], [0,0], [0,0], [1,1], [2,2]]);
echo "<br>";
echo berekenScore([[1,0], [1,0], [2,0], [1,1], [0,2]]);
?>