<?php
// Initialize the sum to 0
$sum = 0;
// Start with the first odd number greater than or equal to 50
$number = 51; // 51 is the first odd number greater than or equal to 50
// Use a while loop to iterate through the odd numbers from 51 to 99
while ($number <= 99) {
    // Add the current odd number to the sum
    $sum += $number;
    // Move to the next odd number
    $number += 2; // Add 2 to get the next odd number
}
// Output the result
echo "The sum of all odd numbers between 50 and 100 is: $sum";
?>
