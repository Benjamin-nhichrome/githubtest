<?php
$myColors = ['rood', 'paars', 'oranje', 'blauw', 'wit'];

// Met een foreach-loop
foreach ($myColors as $color) {
    echo $color . "<br>";
}

// Met een for-loop
for ($i = 0; $i < count($myColors); $i++) {
    echo $myColors[$i] . "<br>";
}
