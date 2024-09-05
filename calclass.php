<form action = "#" method = "post">

Enter Number1 : <input type = "number" name = "n1"><br><br>
Enter Number2 : <input type = "number" name = "n2"><br><br>
<h3>Enter Your Choice </h3><br>
Addition <input type = "radio" name = "op">
Subtraction <input type = "radio" name = "op">
Multiplication <input type = "radio" name = "op">
Division <input type = "radio" name = "op"><br><br>
<input type = "submit" name = "sub"><br><br>

</form>

<?php 
      
class Cal
{
  public $n1;
  public $n2;

 function set_number($n1,$n2)
 {
   $this->n1=$n1;
   $this->n2=$n2;
 }
 
 function get_number()
 {
   return $this->n1+n2;
  // return $this->n2;
 }

}
 if(isset($_POST["sub"]))
{
   $a = $_POST["n1"];
   $b = $_POST["n2"];
   $c;

  $a = new Cal();
  $b = new Cal();

  $a->set_number('a');
  $b->set_number('b');

  echo "Number 1 : ".$a->set_number();
  echo "Number 2 : ".$b->set_number();

  echo "Number 1 : ".$a->get_number();
  //echo "Number 2 : ".$b->get_number();
}

?>