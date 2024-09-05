<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        color: red;
        background-color: green;
    }
    </style>
<body>
    


<?php
class Student {
    protected $roll;
    protected $name;
    protected $age;
    protected $contact;

    function __construct($roll, $name, $age, $contact) {
        $this->roll = $roll;
        $this->name = $name;
        $this->age = $age;
        $this->contact = $contact;
    }

    function displayDetails() {
        echo "Roll: $this->roll<br>";
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Contact: $this->contact<br>";
    }
}

class Test extends Student {
    protected $marks = array();

    function __construct($roll, $name, $age, $contact, $marks) {
        parent::__construct($roll, $name, $age, $contact);
        $this->marks = $marks;
    }

    function displayDetails() {
        parent::displayDetails();
        $totalMarks = array_sum($this->marks);
        echo "Marks in GK: {$this->marks[0]}<br>";
        echo "Marks in SCIENCE: {$this->marks[1]}<br>";
        echo "Marks in MATHS : {$this->marks[2]}<br>";
        echo "marks in sports :{$this->marks[3]}<br>";
        echo "Total Marks: $totalMarks<br>";
    }
}

$studentMarks = new Test(101, "ADIL RATHER", 20, "123-456-7890", array(85, 90, 78,90));
$studentMarks->displayDetails();
?>
</body>
</html>