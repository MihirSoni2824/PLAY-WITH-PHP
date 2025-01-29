<?php
// Parent class Vehicle
class Vehicle {
    public $make;
    public $model;

    // Constructor for Vehicle class
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display Vehicle information
    public function displayInfo() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
    }
}

// Child class Car extends Vehicle
class Car extends Vehicle {
    public $fuelType;

    // Constructor for Car class (inheriting from Vehicle)
    public function __construct($make, $model, $fuelType) {
        parent::__construct($make, $model);  // Calling the parent class constructor
        $this->fuelType = $fuelType;
    }

    // Overriding the displayInfo method to include fuel type
    public function displayInfo() {
        parent::displayInfo();  // Calling the parent class method
        echo "Fuel Type: " . $this->fuelType . "<br>";
    }
}

// Creating an object of the Car class
$myCar = new Car("Toyota", "Camry", "Gasoline");

// Displaying the details of the car
$myCar->displayInfo();
?>
