<?php
$students = [
    'Alice' => 85,
    'Bob' => 78,
    'Charlie' => 92,
    'David' => 88,
    'Eve' => 95
];

$average = array_sum($students) / count($students);
echo "Average Marks: " . $average;
?>
