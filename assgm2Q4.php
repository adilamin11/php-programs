<!DOCTYPE html>
<html>
<head>
    <title>Reverse Word Order</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $words = explode(" ", $inputString);
    $reversedWords = array_reverse($words);
    $reversedString = implode(" ", $reversedWords);
    echo "Original String: $inputString<br>";
    echo "Reversed String: $reversedString";
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="inputString">Enter a string:</label>
    <input type="text" name="inputString" id="inputString" required>
    <button type="submit">Reverse Words</button>
</form>

</body>
</html>
