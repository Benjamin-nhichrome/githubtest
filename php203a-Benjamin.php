<?php
function myBenjamin($x) {
    $output = $x * 2;
    return $output;
}

// Testgevallen
$input1 = 5;
$result1 = myBenjamin($input1);
echo "Bij input $input1 is het resultaat: $result1<br>";

$input2 = 10;
$result2 = myBenjamin($input2);
echo "Bij input $input2 is het resultaat: $result2<br>";
