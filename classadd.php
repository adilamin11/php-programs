<form action="#" method="post">
ENTER NUMBER1 : <input type = "number" name="num1"><br><br>
ENTER NUMBER2 : <input type = "number" name="num2"><br><br>
Submit : <input type = "submit" name="sub"><br><br>
</form>

<?php
   if(isset($_POST["sub"]))
{
  $n1=$_POST["num1"];
  $n2=$_POST["num2"];
class Cal
{
   public $no1;
   public $no2;

public function __construct($n1,$n2)
{
  	$this->no1=$n1;
	$this->no2=$n2;
}
  
function add()
 {
    echo "Addition is : ".$this->no1+$this->no2;
 }
}
}
$cal=new Cal($n1,$n2);
$cal->add();
?>