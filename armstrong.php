<form action = "#" method = "post">

Enter Number : <input type ="number" name ="n1"><br><br>

Submit : <input type ="submit" name ="sub">

</form>

<?php

 if(isset($_POST["sub"]))
{
  $num = $_POST["n1"];
  $r;
  $sum = 0;
 $t = $num;

  while($num > 0)
 {
    $r =  $num % 10 ;
    $sum = $sum + $r * $r * $r;
    $num = (int)$num / 10;
 }
  
  if($t==$sum)
 {
  echo "This Number is Armstrong Number";
 }
 else
 {
   echo "This Number is Not Armstrong Number";
 }

}

?>