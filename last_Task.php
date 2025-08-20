<?php
$arr = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

for ($i = 0; $i < 3; $i++) {           
    for ($j = 0; $j < 4; $j++) {       
        if ($arr[$i][$j] >= 0 && $arr[$i][$j] <= 9) { 
            echo $arr[$i][$j] . " ";
        }
    }
    echo "<br>";
}

echo "<br>"; 

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if (!($arr[$i][$j] >= 0 && $arr[$i][$j] <= 9)) { 
            echo $arr[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>
