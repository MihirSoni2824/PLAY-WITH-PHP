<?php
// Abstract class Shape
abstract class Shape {
    // Abstract method calculateArea() that will be implemented by child classes
    abstract public function calculateArea();
}

// Child class Circle that extends Shape
class Circle extends Shape {
    public $radius;

    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the calculateArea method for Circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Child class Rectangle that extends Shape
class Rectangle extends Shape {
    public $width;
    public $height;

    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the calculateArea method for Rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Instantiate a Circle object with radius 5
$circle = new Circle(5);
echo "Area of Circle with radius 5: " . $circle->calculateArea() . "<br>";

// Instantiate a Rectangle object with width 4 and height 7
$rectangle = new Rectangle(4, 7);
echo "Area of Rectangle with width 4 and height 7: " . $rectangle->calculateArea() . "<br>";
?>
