<?php
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

$input1 = 25;
$result1 = celsiusToFahrenheit($input1);
echo "$input1 graden Celsius is gelijk aan $result1 graden Fahrenheit.<br>";

$input2 = 0;
$result2 = celsiusToFahrenheit($input2);
echo "$input2 graden Celsius is gelijk aan $result2 graden Fahrenheit.<br>";

$input3 = -10;
$result3 = celsiusToFahrenheit($input3);
echo "$input3 graden Celsius is gelijk aan $result3 graden Fahrenheit.<br>";
