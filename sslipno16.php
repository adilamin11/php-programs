<?php
$data = array("Mohsin" => "31", "Ali" => "41", "Ammar" => "39", "Aliza" => "40");

// Ascending order sort by value
asort($data);
echo "Ascending order sorting by value:<br>";
foreach ($data as $key => $value) {
    echo "$key: $value\n";
}

// Descending order sort by value
arsort($data);
echo "Descending order sorting by value:<br>";
foreach ($data as $key => $value) {
    echo "$key: $value\n";
}
?>