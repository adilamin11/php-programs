


<!DOCTYPE html>
<html>
<head>
    <title>Student Details Form</title>
</head>
<body>

<?php
$host= "loclhost";
$username = "root";
$password = "";
$database = "zaid";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $address = $_POST["address"];

    $sql = "INSERT INTO adil (rollno, name, class, address) VALUES ('$rollno', '$name', '$class', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Student record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="rollno">Roll No:</label>
    <input type="text" name="rollno" id="rollno" required><br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="class">Class:</label>
    <input type="text" name="class" id="class" required><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" required><br>
    <button type="submit">Add Student</button>
</form>

<?php
$conn->close();
?>

</body>
</html>

