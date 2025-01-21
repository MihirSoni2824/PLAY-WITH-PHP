<?php
class MathOperations {
    // Method to handle different types of calculations
    public function calculate($num1, $num2 = null) {
        // If only one argument is provided, calculate the square
        if ($num2 === null) {
            return $num1 * $num1; // Square
        }
        return $num1 + $num2; // Addition
    }
}
// Example usage
$mathOps = new MathOperations();
// Case 1: Calculate square of a number
echo "Square of 3: " . $mathOps->calculate(3) . "<br>"; // Outputs:9
// Case 2: Calculate addition of two numbers
echo "Addition of 3 and 4: " . $mathOps->calculate(3, 4) . "<br>"; // Outputs: 7
?>
