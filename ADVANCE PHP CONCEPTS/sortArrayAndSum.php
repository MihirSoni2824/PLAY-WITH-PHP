<?php
function sortAndSum($arr) {
    rsort($arr);
    $sum = array_sum($arr);
    echo "Array in Descending Order: " . implode(", ", $arr) . "<br>";
    echo "Sum: " . $sum;
}

// Example usage
sortAndSum([3, 1, 4, 1, 5, 9]);
?>
