<?php
function netEuro($amount) {
  
    $formattedAmount = number_format($amount, 2, '.', '');
  
    return '€ ' . $formattedAmount;
}


echo netEuro(12) . "<br>";      
echo netEuro(12.5) . "<br>";   
echo netEuro(12.6666) . "<br>";  
?>
