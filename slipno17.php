<?php
function isArmstrong($num) {
    $originalNum = $num;
    $sum = 0;
    $numDigits = strlen((string)$num);

    while ($num > 0) {
        $digit = $num % 10;
        $sum += pow($digit, $numDigits);
        $num = (int)($num / 10);
    }

    return $sum === $originalNum;
}

$num = intval(readline("Enter a number: "));

if (isArmstrong($num)) {
    echo "$num is an Armstrong number.\n";
} else {
    echo "$num is not an Armstrong number.\n";
}
?>
