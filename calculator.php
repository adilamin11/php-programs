<form action="#" method="post">

Enter First Number : <input type="number" name= "num1"><br><br>
Enter Second Number : <input type="number" name= "num2"><br><br>
Enter your Choice :  
Addition : <input type="radio" name="opp" value="addi">
Subtraction : <input type="radio" name="opp" value="subtra">
Multiplication : <input type="radio" name="opp" value="multi">
Division : <input type="radio" name="opp" value="divi">
<br> <br>
Check : <input type="submit" name= "submit">

</form>

<?php
 
if(isset($_POST["submit"]))
{
   $n1=$_POST["num1"];
   $n2=$_POST["num2"];
   
  
  if($_POST["opp"]=="addi")
  {
    echo "Addition is $n1 + $n2 = ".($n1+$n2);
  }
  
  else if($_POST["opp"]=="subtra")
  {
    echo "Subtraction is $n1 - $n2 = ".($n1-$n2);
  }
  
  else if($_POST["opp"]=="multi")
  {
    echo "Multiplication is $n1 * $n2 = ".($n1*$n2);
  }
  
  else if($_POST["opp"]=="divi")
  {
    echo "Division is $n1 / $n2 = ".($n1/$n2);
  }
  
  else 
  {
    echo "Invalid Choice ";
  }
}

?>