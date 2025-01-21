<?php
// Base class
abstract class Shape {
    // Abstract method to calculate the area
    abstract public function calculateArea();
}
// Child class for Rectangle
class Rectangle extends Shape {
    private $width;
    private $height;
    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // Override calculateArea method
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Child class for Circle
class Circle extends Shape {
    private $radius;
    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // Override calculateArea method
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
// Example usage
$rectangle = new Rectangle(5, 10); // Rectangle with width 5 and height 10
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
$circle = new Circle(7); // Circle with radius 7
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
?>
