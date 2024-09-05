<form action="#" method="post">

Enter Number : <input type="number" name="num"><br><br>
Submit : <input type="submit" name="sub">

</form>
<?php

    if(isset($_POST["sub"]))
  {
    $n = $_POST ["num"] ;
    $r;
    $sum=0;

    while($n>0)
    {
      $r = $n % 10 ;
      $sum = $sum + $r ;
      $n = (int)($n / 10) ; 
    }
   
   echo "This Number Sum is : ".$sum;
   
  }


?>