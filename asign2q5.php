<!DOCTYPE html>
<html>
<head>
    <title>Student Details Form</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $address = $_POST["address"];

    $sql = "INSERT INTO students (rollno, name, class, address) VALUES ('$rollno', '$name', '$class', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Student details added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<h2>Enter Student Details:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Roll Number: <input type="text" name="rollno"><br><br>
    Name: <input type="text" name="name"><br><br>
    Class: <input type="text" name="class"><br><br>
    Address: <textarea name="address" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Add Student">
</form>

</body>
</html>
