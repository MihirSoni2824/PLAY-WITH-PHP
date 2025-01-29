<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

$mergedArray = array_merge($array1, $array2);
$uniqueArray = array_unique($mergedArray);
sort($uniqueArray);
print_r($uniqueArray);
?>
