<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
</head>
<body>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $address = $_POST["address"];

    $sql = "UPDATE students SET name='$name', class='$class', address='$address' WHERE rollno='$rollno'";

    if ($conn->query($sql) === TRUE) {
        echo "Student record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch current student details
$studentData = [];
if (isset($_GET["rollno"])) {
    $rollno = $_GET["rollno"];
    $fetchSql = "SELECT * FROM students WHERE rollno='$rollno'";
    $result = $conn->query($fetchSql);
    if ($result->num_rows > 0) {
        $studentData = $result->fetch_assoc();
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="rollno">Roll No:</label>
    <input type="text" name="rollno" id="rollno" value="<?php echo $studentData['rollno'] ?? ''; ?>" required><br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo $studentData['name'] ?? ''; ?>" required><br>
    <label for="class">Class:</label>
    <input type="text" name="class" id="class" value="<?php echo $studentData['class'] ?? ''; ?>" required><br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="<?php echo $studentData['address'] ?? ''; ?>" required><br>
    <button type="submit">Update Student</button>
</form>

<?php
$conn->close();
?>

</body>
</html>
