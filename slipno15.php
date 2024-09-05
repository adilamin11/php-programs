<?php
function fibonacciSeries($num) {
    $fib = [0, 1];
    for ($i = 2; $i < $num; $i++) $fib[] = $fib[$i - 1] + $fib[$i - 2];
    return $fib;
}

$number = 10; // Replace with the desired number
$series = fibonacciSeries($number);
echo implode(", ", $series);
?>