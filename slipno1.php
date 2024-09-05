
<?php

class Employee {
    protected $id, $name, $department, $salary;

    function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    function display() {
        echo "ID: $this->id<br>Name: $this->name<br>Department: $this->department<br>Salary: $this->salary<br>";
    }
}

class Manager extends Employee {
    private $bonus;

    function __construct($id, $name, $department, $salary, $bonus) {
        parent::__construct($id, $name, $department, $salary);
        $this->bonus = $bonus;
    }

    function display() {
        parent::display();
        echo "Bonus: $this->bonus<br>";
    }
}

$manager = new Manager(101, "ADIL", "Sales", 60000, 5000);
$manager->display();
?>