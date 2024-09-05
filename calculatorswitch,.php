<form action = "#" method = "post">

Number1 : <input type ="number" name ="n1"><br><br>
Number2 : <input type ="number" name ="n2"><br><br>

<p> Press 1 Addition </p>
<p> Press 2 Subtraction </p>
<p> Press 3 Multiplication</p
<p> Press 4 Division </p>
<p> Press 5 Remainder </p>

Enter Your Choice : <input type ="number" name ="c"><br><br>
Submit <input type ="submit" name ="sub">
</form>

<?php

 if(isset($_POST["sub"]))
{
  $num1 = $_POST["n1"];
  $num2 = $_POST["n2"];
  $ch = $_POST["c"];
  


  switch($ch)
  {
    case 1 : 
    echo "Addition is : ".$num1 + $num2 ;
    break;

    case 2 : 
    echo " Subtraction is : ".$num1 - $num2 ;
    break;

    case 3 : 
    echo "Multiplication is : ".$num1 * $num2 ;
    break;

    case 4 : 
    echo "Division is : ".$num1 / $num2 ;
    break;

    case 5 : 
    echo "Remainder is : ".$num1 % $num2 ;
    break;

    default : echo "Invalid Choise Plz Try Again";
  }

 }

?>