<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $words = explode(" ", $inputString);
    $reversedWords = array_map('strrev', $words);
}
if (isset($reversedWords)): 
   // <h2>Reversed words:</h2>
     foreach ($reversedWords as $word): 
      //  <p>php echo $word; </p>
   // php endforeach; 
//php endif; 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Reverse Words</title>
</head>
<body>
    <h2>Enter a string:</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="inputString">
        <button type="submit">Submit</button>
    </form>

    <?php if (isset($reversedWords)): ?>
        <h2>Reversed words:</h2>
        <?php foreach ($reversedWords as $word): ?>
            <p><?php echo $word; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
