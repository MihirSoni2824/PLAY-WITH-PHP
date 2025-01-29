<?php
// MathOperations class
class MathOperations {
    
    // Magic method __call to handle method overloading
    public function __call($name, $arguments) {
        switch ($name) {
            case 'add':
                return $this->add($arguments);
            case 'subtract':
                return $this->subtract($arguments);
            case 'multiply':
                return $this->multiply($arguments);
            default:
                return "Method $name not defined.";
        }
    }

    // Addition method
    private function add($numbers) {
        return array_sum($numbers);
    }

    // Subtraction method
    private function subtract($numbers) {
        return array_reduce($numbers, function($carry, $item) {
            return $carry - $item;
        });
    }

    // Multiplication method
    private function multiply($numbers) {
        return array_reduce($numbers, function($carry, $item) {
            return $carry * $item;
        }, 1);
    }
}

// Creating an object of MathOperations
$math = new MathOperations();

// Performing addition with varying numbers of arguments
echo "Addition of [1, 2, 3]: " . $math->add([1, 2, 3]) . "<br>";  // 6
echo "Addition of [10, 5]: " . $math->add([10, 5]) . "<br>";        // 15

// Performing subtraction with varying numbers of arguments
echo "Subtraction of [10, 5, 2]: " . $math->subtract([10, 5, 2]) . "<br>";  // 3
echo "Subtraction of [20, 10, 5]: " . $math->subtract([20, 10, 5]) . "<br>";  // 5

// Performing multiplication with varying numbers of arguments
echo "Multiplication of [2, 3, 4]: " . $math->multiply([2, 3, 4]) . "<br>";  // 24
echo "Multiplication of [5, 10]: " . $math->multiply([5, 10]) . "<br>";      // 50
?>
