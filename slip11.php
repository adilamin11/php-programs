<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$x = 5;
$y = 10;

swap($x, $y);

echo "After swapping: x = $x, y = $y";
?>