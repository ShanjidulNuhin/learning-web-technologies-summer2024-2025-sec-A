<?php
$amount=1000;
$vat=0.15;

echo "The amount without vat : .$amount<br>";
echo "Added vat : .$vat<br>";
echo "Total amount using 15% Vat : " . ($amount + ($amount * $vat)) . "<br>";

?>
