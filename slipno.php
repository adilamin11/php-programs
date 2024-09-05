<?php
class Employee {
    protected $id;
    protected $name;
    protected $department;
    protected $salary;

    public function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function accept() {
        echo "Enter Employee ID: ";
        $this->id = trim(fgets(STDIN));
        echo "Enter Employee Name: ";
        $this->name = trim(fgets(STDIN));
        echo "Enter Employee Department: ";
        $this->department = trim(fgets(STDIN));
        echo "Enter Employee Salary: ";
        $this->salary = floatval(trim(fgets(STDIN)));
    }

    public function display() {
        echo "Employee ID: " . $this->id . "<br>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Department: " . $this->department . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}

class Manager extends Employee {
    private $bonus;

    public function setBonus($bonus) {
        $this->bonus = $bonus;
    }

    public function display() {
        parent::display();
        echo "Manager Bonus: " . $this->bonus . "\n";
    }
}

// Create an object of Manager class
$manager = new Manager(101, "ADIL", "Management", 60000);
$manager->setBonus(5000);

// Display Manager details
echo "Manager Details:\n";
$manager->display();
?>
