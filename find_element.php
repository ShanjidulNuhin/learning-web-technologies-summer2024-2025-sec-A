<?php
$arr = array(10, 20, 30, 40, 50);
$search = 60;
$found = false;

foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search is found in the array.";
} else {
    echo "$search is not found in the array.";
}
?>
