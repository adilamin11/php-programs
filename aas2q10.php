
<!DOCTYPE html>
<html>
<head>
    <title>Update and Display Student Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$host = "localhost";
$username = "root";
$password = "";
$database= "adil";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $address = $_POST["address"];

    $sql = "UPDATE adil SET name='$name', class='$class', address='$address' WHERE rollno='$rollno'";

    if ($conn->query($sql) === TRUE) {
        echo "Student record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all student details
$fetchSql = "SELECT * FROM adil";
$result = $conn->query($fetchSql);
$studentData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $studentData[] = $row;
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
    <button type="submit">Update Student</button>
</form>

<h2>Student Details</h2>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Class</th>
        <th>Address</th>
    </tr>
    <?php foreach ($studentData as $student) { ?>
        <tr>
            <td><?php echo $student["rollno"]; ?></td>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["class"]; ?></td>
            <td><?php echo $student["address"]; ?></td>
        </tr>
    <?php } ?>
</table>

<?php
$conn->close();
?>

</body>
</html>

