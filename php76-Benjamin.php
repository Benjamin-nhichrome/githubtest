<?php
function swap($uitslag) {
  // swap de twee elementen van het array
  $swap = [$uitslag [1], $uitslag[0]];
  return $swap;
}

print "<pre>";
print_r( swap([1,2]) );
echo "<br>";
print_r( swap([4,2]) );
echo "<br>";
print_r( swap([1,1]) );