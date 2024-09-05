
<?php
class ParentClass {
    protected $parentProperty;

    function __construct($value) {
        $this->parentProperty = $value;
    }

    function parentMethod() {
        echo "Parent Method: $this->parentProperty<br>";
    }
}

class ChildClass extends ParentClass {
    function childMethod() {
        echo "Child Method: $this->parentProperty<br>";
    }
}

$childObj = new ChildClass("ADIL RATHER");
$childObj->parentMethod();
$childObj->childMethod();
?>