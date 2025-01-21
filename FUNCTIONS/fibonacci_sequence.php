<?php
// Function to generate Fibonacci sequence
function generateFibonacci($n) {
    // Create an array to hold the Fibonacci sequence
    $fib = [];
    // Handle base cases for Fibonacci numbers
    if ($n >= 1) {
        $fib[0] = 0; // First Fibonacci number
    }
    if ($n >= 2) {
        $fib[1] = 1; // Second Fibonacci number
    }
    // Generate Fibonacci numbers from index 2 to n-1
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; // Sum of the two preceding numbers
    }

    return $fib;
}
// Check if the form is submitted and a number is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $n = (int)$_POST['number'];  // Get the number from the form input
    // Call the generateFibonacci function to get the sequence
    $fibonacciNumbers = generateFibonacci($n);
    // Display the Fibonacci sequence
    echo "The first $n Fibonacci numbers are: ";
    echo implode(", ", $fibonacciNumbers);
} else {
    echo "<p>Please enter a number to generate Fibonacci sequence.</p>";
}
?>
<!-- HTML Form to take user input -->
<form method="post" action="">
    <label for="number">Enter a number (n): </label>
    <input type="number" name="number" id="number" required min="1">
    <input type="submit" value="Generate Fibonacci Sequence">
</form>
