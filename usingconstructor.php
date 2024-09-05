<?php
class UserDetails {
    public $name;
    public $age;
    public $email;

    function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    function displayDetails() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Email: $this->email<br>";
    }
}

$user = new UserDetails("ADIL", 19, "ADIL@example.com");
$user->displayDetails();
?>