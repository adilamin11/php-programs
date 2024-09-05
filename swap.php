<form action = "#" method = "post">
Number1 <input type ="number" name ="n1"><br><br>
Number2 <input type ="number" name ="n2"><br><br>
Submit <input type ="submit" name ="sub">
</form>

<?php

 if(isset($_POST["sub"]))
{
  $num1 = $_POST["n1"];
  $num2 = $_POST["n2"];
 // $t;


  function swap($a , $b)
  {
    $t = $a;
    $a = $b;
    $b = $t;

    echo "<br><br>After Swaping <br><br>";
  
    echo "a = $a and b = $b";
  }
  
   echo "Before Swaping <br><br>";

   echo "num1 = $num1 and num2 = $num2";
   swap($num1,$num2);
 }
?>