<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO TRAVEL FORM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="iit-kharagpur.jpg" alt="iit-kharagpur">
    <div class="container">
        <h1>welcome to baramulla us trip form</h1>
        <p>enter your deatils to confirm your participation in the trip</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc"id="desc" cols="30" rows="10" placeholder="enter any other descrption">
            </textarea>,,
            <button class="btn">SUBMIT</button>
        </form>

</div>
<script src="index.js"></script>
<!--INSERT INTO `trip2` (`sno`, `name`, `age`, `gender`, `email`, `phone`, 
`other`, `dt`) VALUES ('1', ABS('testname name'), '23', 'male', 'rathe704@gamil.com', 
'90', 'this is my first ever php admin', '12'), ('1', 'testname', '23', 'male',
 'rather@704gmail.com', '7888878', 'this is php', '12');-->
<?php

$server ="localhost";
$username ="root";
$password ="";
$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
echo "sucess conneting to the db";
?>

</body>

</html>