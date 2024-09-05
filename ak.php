<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fardin21";

$con = mysqli_connect($servername,$username,$password,$database);

if($con)
{
  echo "Connection is Successfuly";
}
else
{
   echo "Connection is Not Successfuly";
}
$dis = " SELECT * FROM student ";

$res = mysqli_query($connection,$dis);


?>

<table border = 1>
<tr>
  <td> roll_no </td>
  <td> name </td>
  <td> class </td>
  <td> address </td>
</tr>
</table>