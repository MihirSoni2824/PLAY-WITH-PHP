<?php
function countOccurrences($array) {
    $occurrences = [];

    foreach ($array as $value) {
        if (isset($occurrences[$value])) {
            $occurrences[$value]++;
        } else {
            $occurrences[$value] = 1;
        }
    }
    return $occurrences;
}
// Example usage:
$array = ["PHP", "JavaScript", "PHP", "Python", "JavaScript", "PHP"];
$result = countOccurrences($array);
foreach ($result as $value => $count) {
    echo "$value: $count\n";
}
?>
