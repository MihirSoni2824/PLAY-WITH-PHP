<?php
// Function to check if a number is prime
function isPrime($num) {
    // Handle numbers less than or equal to 1
    if ($num <= 1) {
        return false; // Numbers less than or equal to 1 are not prime
    }
    // Check divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Found a divisor, so the number is not prime
        }
    }
    return true; // No divisors found, the number is prime
}
// Check if the form is submitted and a number is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $num = (int)$_POST['number'];  // Get the number from the form input
    // Call the isPrime function and display the result
    if (isPrime($num)) {
        echo "$num is a prime number.";
    } else {
        echo "$num is not a prime number.";
    }
} else {
    // Form has not been submitted yet
    echo "<p>Please enter a number to check if it's prime.</p>";
}
?>
<!-- HTML Form to take user input -->
<form method="post" action="">
    <label for="number">Enter a number: </label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Check if Prime">
</form>
