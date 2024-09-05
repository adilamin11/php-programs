

<!DOCTYPE html>
<html>
<head>
    <title>Reverse Word Order</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_string"];
    $words = explode(" ", $inputString);
    $reversedWords = array_reverse($words);
    
    echo "<h2>Original String:</h2>";
    echo "<p>$inputString</p>";
    
    echo "<h2>Reversed Word Order:</h2>";
    echo "<p>" . implode(" ", $reversedWords) . "</p>";
}
?>

<h2>Enter a String:</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <textarea name="input_string" rows="4" cols="50"></textarea><br><br>
    <input type="submit" value="Reverse Words">
</form>

</body>
</html>

