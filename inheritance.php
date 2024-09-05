<?php  
    class exm {  
        public function func1()  
        {  
            echo "this is me bro";  
        }     
    }  
    class exm1 extends exm {  
        public function func2()  
        {  
            echo "in php";  
        }     
    }  
    $obj= new exm1();  
    $obj->func1();  
    $obj->func2();  

echo"<br>";
class Employee {
  public $name;
  public $surname;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$emp1= new Employee("adil");
echo $emp1->get_name();
?>