<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update student details
$rollno = 101;
$name = "adil";
$class = "sybca";

$address = "gulmarg";

$sql = "UPDATE students SET name='adil', class='$class', address='$address' WHERE rollno=$rollno";
$conn->query($sql);

// Display updated student details
$result = $conn->query("SELECT * FROM students WHERE rollno=$rollno");
$row = $result->fetch_assoc();

echo "Updated Students Details:<br>";
echo "Roll No: " . $row["rollno"] . "<br>";
echo "Name: " . $row["name"] . "<br>";
echo "Class: " . $row["class"] . "<br>";
echo "Address: " . $row["address"] . "<br>";

$conn->close();
?>
