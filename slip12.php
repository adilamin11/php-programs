<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border: 20px;
        color: yellow;
        background-color: black;
    }
    .rt{
        background-color: red;
    }
    form{
        color: blue;
    }
</style>
<body>
    



<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "students";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollno = $_POST["rollno"];
    $name = $_POST["name"];
    $class = $_POST["class"];
    $address = $_POST["address"];

    $conn->query("INSERT INTO students (rollno, name, class, address) VALUES ('$rollno', '$name', '$class', '$address')");
}

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <div class="rt">
    <h2>Update Student Details</h2>
    <form method="post">
        Roll No: <input type="text" name="rollno"><br>
        Name: <input type="text" name="name"><br>
        Class: <input type="text" name="class"><br>
        Address: <input type="text" name="address"><br>
        <button type="submit">Submit</button>
    </form>

    <h2>Student Table</h2>
    <table border="1">
        <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Class</th>
            <th>Address</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["rollno"]; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["class"]; ?></td>
                <td><?= $row["address"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
        </div>
    <?php
$conn->close();
?>

</body>
</html>


