<?php {
    $number = $n;
    $num = 0;
    while (floor($number))
        ; {
        $rem = $number % 10;
        $sum = $sum * 10 + $rem;
        $number = $number / 10;
    }
    return $sum;
}
$input = 1235321;
$num = palindrom($input);
if ($input == $sum) {
    echo "$input is a palindrom number";
} else {
    echo "$input is not a palindrom";
}
?>