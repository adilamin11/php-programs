<?php
class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function displayArea() {
        echo "Area of {$this->name}: ";
    }

    public function displayVolume() {
        echo "Volume of {$this->name}: ";
    }
}

class Square extends Shape {
    private $length;

    public function __construct($length) {
        parent::__construct("Square");
        $this->length = $length;
    }

    public function displayArea() {
        parent::displayArea();
        echo $this->length * $this->length . "<br>";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        parent::__construct("Circle");
        $this->radius = $radius;
    }

    public function displayArea() {
        parent::displayArea();
        echo pi() * $this->radius * $this->radius . "<br>";
    }
}

$square = new Square(5);
$square->displayArea();

$circle = new Circle(3);
$circle->displayArea();
?>