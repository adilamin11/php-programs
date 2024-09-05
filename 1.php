<?php

$con = new mysqli('localhost','root','','fardin');

if($con->connect_error)
{
  echo "Error"; 
}
else
{
  echo "Successfully";
}

// $emp = " CREATE TABLE Student (s_rno int primary key,s_name varchar(20),s_class varchar(20),s_address varchar(30))";

$insert = "INSERT INTO student VALUES (104,'Suleman','Sybca','Pune')";

/* if(mysqli_query($con,$emp)==true)
{
  echo "Create Table Successfully";
}
else
{
    echo "Create Table NOt Successfully";
}
*/

if(mysqli_query($con,$insert)==true)
{
  echo " Successfully";
}
else
{
  echo "Not Successfully";
}
?>