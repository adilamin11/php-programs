<?php
function calculate($num1,$num2,$operator){
    switch ($operator){
        case'+':
            return $num1 + $num2;
            case '-':
                return $num1 -$num2;
                case'*':
                    return $num1 * $num2;
                    case '/':
                        if($num2 = 0){
                            return $num1 /$num2;

                        } else {
                            return "error:cannot divide by zero";

                        }
                        default:
                        return "error:invalid operators ";

    }
}
$num1 = 10;
$num2 = 5;
$operator = '*';
$result = calculate($num1,$num2,$operator);
echo "result:". $result;
?>
