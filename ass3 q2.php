<?php
class ParentClass {
    protected $parentProperty;

    public function __construct($value) {
        $this->parentProperty = $value;
    }

    public function parentMethod() {
        return "This is a method from the parent class.";
    }

    public function getParentProperty() {
        return $this->parentProperty;
    }
}

class ChildClass extends ParentClass {
    public function childMethod() {
        return "This is a method from the child class.";
    }
}

// Create an object of ChildClass
$childObj = new ChildClass("Hello, I'm a value!");

// Access parent class methods and properties through the child object
echo $childObj->parentMethod() . "<br>"; // Accessing parent method
echo $childObj->childMethod() . "<br>";  // Accessing child method

// Access parent property through the child object
$parentValue = $childObj->getParentProperty();
echo "Parent Property Value: $parentValue";
?>
