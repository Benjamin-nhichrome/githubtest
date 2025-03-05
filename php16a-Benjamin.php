<?php
include_once('mijnFuncties.php');

$mijnArray = ['Ben','Andrea','Souvyein','Raphael','Dante','benny','Wessel','Joel','Maxey','Brian','Kikiya'];
foreach ($mijnArray as $naam) {
    echo welkom2(1, $naam) . "<br>";
    echo welkom2(2, $naam) . "<br>";
}
?>
