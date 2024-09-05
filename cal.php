<form action="#" method="post">

Enter First Number : <input type="number" name= "num1"><br><br>
Enter Second Number : <input type="number" name= "num2"><br><br>

0.Exit 
1.Addition
2.Subtraction 
3.Multiplication
4.Division

Enter your Choice : <input type ="number" name="ch">

Check : <input type="submit" name= "submit">

</form>

<?php
 
if(isset($_POST["submit"]))
{
   $n1=$_POST["num1"];
   $n2=$_POST["num2"];
   $c=$_POST["ch"];
 

  while($_POST["ch"]!=0)
{

  if($_POST["ch"]==1)
  {
    echo "Addition is $n1 + $n2 = ".($n1+$n2);
  }
  
  else if($_POST["ch"]==2)
  {
    echo "Subtraction is $n1 - $n2 = ".($n1-$n2);
  }
  
  else if($_POST["ch"]==3)
  {
    echo "Multiplication is $n1 * $n2 = ".($n1*$n2);
  }
  
  else if($_POST["ch"]==4)
  {
    echo "Division is $n1 / $n2 = ".($n1/$n2);
  }
  
  else 
  {
    echo "Invalid Choice ";
  }

 }

}

?>