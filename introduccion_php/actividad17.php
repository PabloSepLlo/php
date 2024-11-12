<?php
    $num1 = 4;
    $num2 = 0;
    $operador = '/';
    switch ($operador) {
        case '+':
            echo "$num1 + $num2 es ". $num1 + $num2;
            break;
        case '-':
            echo "$num1 - $num2 es ". $num1 - $num2;
            break;
        case '*':
            echo "$num1 * $num2 es ". $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo "No puedes dividir entre 0";
                break;
            }
            else {
                echo "$num1 / $num2 es ". $num1 / $num2;
                break;
            }
        default:
            echo "Esa operacion no se puede realizar";
            break;
    }
?>