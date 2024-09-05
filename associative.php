<?php
 
 $arr = array("Mohsin" => "22","Fardin" => "15","Suleman" => "2","Akash" => "34","Saad" => "6");

  $len = count($arr);
 // echo $len;

 asort($arr);

   foreach ($arr as $x => $x_value)
  {
     echo "Key = $x and Value = $x_value<br>";
  }
 
  echo "<br>";
  arsort($arr);
 
  foreach ($arr as $x => $x_value)
  {
     echo "Key = $x and Value = $x_value<br>";
  }
?>