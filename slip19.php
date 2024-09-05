<?php

function reversenumber($num){
    return intval(strrev(strval($num)));
}
$number =12345;
$reversed =reversenumber($number);
echo "orginal number : $number<br>";
echo "reversed number : $reversed";
?>