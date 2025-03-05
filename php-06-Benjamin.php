<?php
function onvoldoendes($array) {
    $onvoldoendes = [];
    foreach ($array as $cijfer) {
        if ($cijfer < 6) {
            $onvoldoendes[] = $cijfer;
        }
    }
    return $onvoldoendes;
}


$PHPCijfers = [4, 5, 4, 5, 6, 6, 5, 8, 7, 6, 4, 8];

echo "<pre>";
print_r(onvoldoendes([6, 6, 7]));        
print_r(onvoldoendes([6, 3, 6, 7]));      
print_r(onvoldoendes($PHPCijfers));       
echo "</pre>";
?>
