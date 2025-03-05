<?php
$werkdagVanDeWeek=[ 'ma','di','wo','do','vr'];
$vrijeDag=[ 'ja', 'nee'];

echo "<table border=1>";
echo "<tr><th>dag</th><th>vrije dag</th><th>advies</th></tr>";

foreach($werkdagVanDeWeek as $dag) {
  foreach($vrijeDag as $vd) {

    echo "<tr>";
    echo "<td>$dag</td><td>$vd</td><td>";

    // je moet vroeg opstaan op vrijdagen als het geen vrije dag is
    if ( $dag === 'vr' && $vd === 'nee' ) {
      echo "07:00 uur op staan";
    } else {
      echo "uitslapen";
    }

    echo "</td>";
  }
}
echo "</table>";
?>