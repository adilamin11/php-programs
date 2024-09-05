<?php
$total = 0;

for ($i = 1; $i <= 50; $i++) {
    $total += $i;
}

echo "Total sum: $total<br>";
function factorial($n) {
    return ($n == 0) ? 1 : $n * factorial($n - 1);
}

?>
