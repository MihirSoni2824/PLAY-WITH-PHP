<?php
// Parent class
class Employee {
    // Properties
    protected $name;
    protected $salary;

    // Constructor to initialize Employee
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Method to get employee details
    public function getDetails() {
        return "Name: " . $this->name . ", Salary: $" . number_format($this->salary, 2);
    }
}

// Child class
class Manager extends Employee {
    // Additional property
    private $department;

    // Constructor to initialize Manager
    public function __construct($name, $salary, $department) {
        // Call the parent class constructor
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    // Method to get manager details
    public function getDetails() {
        return parent::getDetails() . ", Department: " . $this->department;
    }
}

// Example usage
$manager = new Manager("Pratik", 75000, "IT");
echo $manager->getDetails();
?>
