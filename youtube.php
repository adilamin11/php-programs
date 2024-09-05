<?php
class employee{
    public $name;
    public $age;
    public $salary;
     public function construct($n,$2,$s) {
        $this->$name = $n;
        $this->$age = $2;
        $this->$salary = $s;
    }
    function info(){
        echo "employee profile";
        echo "employee name";
        echo "employee age";
        echo "employee salary";
    }
}
$e1 = new employee("rather",25,2500);
$el->info();