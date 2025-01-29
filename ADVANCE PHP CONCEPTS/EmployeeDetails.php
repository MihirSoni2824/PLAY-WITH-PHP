<?php
class Employee {
    public $name;
    public $designation;
    public $salary;
    
    public function __construct($name, $designation, $salary) {
        $this->name = $name;
        $this->designation = $designation;
        $this->salary = $salary;
    }

    public function displayDetails() {
        echo "Name: $this->name, Designation: $this->designation, Salary: $$this->salary<br>";
    }
}

$employee1 = new Employee("Alice", "Manager", 5000);
$employee2 = new Employee("Bob", "Developer", 4000);
$employee3 = new Employee("Charlie", "Designer", 3500);

$employee1->displayDetails();
$employee2->displayDetails();
$employee3->displayDetails();
?>
