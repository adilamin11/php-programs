
    <?php
    
    
    $num1 = floatval(readline("Enter first number: "));
    $num2 = floatval(readline("Enter second number: "));
    
    echo "Select operation:\n";
    echo "1. Add\n";
    echo "2. Subtract\n";
    echo "3. Multiply\n";
    echo "4. Divide\n";
    
    $choice = intval(readline("Enter choice (1/2/3/4): "));
    
    switch ($choice) {
        case 1:
            $result = $num1 + $num2;
            $operation = "addition";
            break;
        case 2:
            $result = $num1 - $num2;
            $operation = "subtraction";
            break;
        case 3:
            $result = $num1 * $num2;
            $operation = "multiplication";
            break;
        case 4:
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operation = "division";
            } else {
                $result = "Cannot divide by zero";
            }
            break;
        default:
            $result = "Invalid choice";
            break;
    }
    
    if (isset($operation)) {
        echo "Result of $operation: $result\n";
    } else {
        echo "$result\n";
    }
    ?>
    