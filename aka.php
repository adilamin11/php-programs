<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "fardin21";

$con = mysqli_connect($servername,$username,$password,$database_name);

if($con)
{
  echo "Connection is Successfuly";
}
else
{
   echo "Connection is Not Successfuly";
}


$dis = " SELECT * FROM student ";

$res = mysqli_query($con,$dis);


?>

<table border = 1>
<tr>
  <td> Roll no </td>
  <td> Name </td>
  <td> Class </td>
  <td> Address </td>
</tr>

<?php

 while($row = mysqli_fetch_assoc($res))
{
 
?>

<tr> 
  <td> <?php echo $row['roll_no'] ?></td>
  <td> <?php echo $row['name'] ?></td>
  <td> <?php echo $row['class'] ?></td>
  <td> <?php echo $row['address'] ?></td>
</tr>

<?php 
} 

?>

</table>

</body>
</html>