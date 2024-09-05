<?php
/*$string = "hello World";

echo strtoupper($string) . "<b>";   // Uppercase
echo strtolower($string) . "<br>";   // Lowercase
echo ucfirst($string) . "<br>";      // First character uppercase
echo ucwords($string) . "<br>";      // First character of all words <uppercase*/

$string = "hello World";

// Transform to uppercase
$uppercase = strtoupper($string);
echo "Uppercase: $uppercase<br>";

// Transform to lowercase
$lowercase = strtolower($string);
echo "Lowercase: $lowercase<br>";

// First character uppercase
$firstUppercase = ucfirst($string);
echo "First character uppercase: $firstUppercase<br>";

// First character of all words uppercase
$allWordsUppercase = ucwords($string);
echo "First character of all words uppercase: $allWordsUppercase\n";

?>