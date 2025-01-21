<?php
// Create a multidimensional array to store student names and their scores
$students = [
    ["name" => "Alice", "scores" => [85, 90, 78]],
    ["name" => "Bob", "scores" => [72, 88, 91]],
    ["name" => "Charlie", "scores" => [89, 76, 84]]
];
// Function to calculate the average score of a student
function calculateAverage($scores) {
    $total = 0;
    foreach ($scores as $score) {
        $total += $score;
    }
    return $total / count($scores);
}

// Display student names, their scores, and average scores
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Scores</th><th>Average</th></tr>";


foreach ($students as $student) {
    $name = $student["name"];
    $scores = $student["scores"];
    $average = calculateAverage($scores);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>" . implode(", ", $scores) . "</td>";
    echo "<td>" . number_format($average, 2) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
