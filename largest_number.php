<?php
$a = 10; 
$b = 20; 
$c = 1;

if ($a >= $b && $a >= $c) {
    echo "Largest number is: $a between 10,20 and 1";
} 
elseif ($b >= $a && $b >= $c) {
    echo "Largest number is: $b between 10,20 and 1";
} 
else {
    echo "Largest number is: $c between 10,20 and 1";
}
?>
