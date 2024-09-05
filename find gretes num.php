<?php
function findgreatestnumber($num1,$num2,$num3,$num4)
{
    $greatest = $num1;
    if($num2>$greatest)
    {
        $greatest = $num2;
    }
    if($num3>$greatest)
    {
        $greatest=$num3;
    }
if($num4>$greatest)
{
    $greatest =$num4;
}
return $greatest;
}
//replace 
$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;
$greatestnum = findgreatestnumber($num1,$num2,$num3,$num4);
echo "the gretest number is:".$greatestnum;
?>