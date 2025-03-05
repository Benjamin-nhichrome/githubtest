<?php
function sumOfTwoHighest($array) {
    if (count($array) < 2) {
        return "Foutmelding: array heeft alleen een waarde.";
    }
rsort($array);
$sum = $array[0] + $array[1];
 return $sum;
}

$input1 = [12, 3, 21, 5, 3, 20];
$result1 = sumOfTwoHighest($input1);
echo "Resultaat 1: $result1<br>";

$input2 = [12, 3, 21, 5, 3, 20, 21, 3, 2, 1, -4, 0];
$result2 = sumOfTwoHighest($input2);
echo "Resultaat 2: $result2<br>";

$input3 = [2, 1];
$result3 = sumOfTwoHighest($input3);
echo "Resultaat 3: $result3<br>";

$input4 = [0, 0];
$result4 = sumOfTwoHighest($input4);
echo "Resultaat 4: $result4<br>";

$input5 = [2];
$result5 = sumOfTwoHighest($input5);
echo "Resultaat 5: $result5<br>";






