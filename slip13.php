<?php
class Student {
    public $rollno;
    public $name;
    public $address;
    public $contact;

    public function __construct($rollno, $name, $address, $contact) {
        $this->rollno = $rollno;
        $this->name = $name;
        $this->address = $address;
        $this->contact = $contact;
    }

    public function displayDetails() {
        echo "Roll No: " . $this->rollno . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Contact: " . $this->contact . "<br>";
    }
}

$student = new Student("123", "XAID", "KUPWARA KASHMIR", "9070467011");
$student->displayDetails();
?>
