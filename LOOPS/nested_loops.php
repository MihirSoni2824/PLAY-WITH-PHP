<?php
// Outer loop for rows
for ($i = 1; $i <= 4; $i++) {
    // Inner loop to print numbers in each row
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";  // Print the number followed by a space
    }
    echo "<br>";  // Move to the next line after each row
}
?>
