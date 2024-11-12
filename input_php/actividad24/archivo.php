<?php
    $salario = $_GET["salario"];
    $impuesto = 0;
    if (isset($salario)){
        if (is_numeric($salario) && $salario >= 1){
            if ($salario <= 1000){
                echo "El salario neto es $salario";
            }
            elseif ($salario >= 1001 && $salario <= 3000){
                $impuesto = $salario * 0.1;
                $salario -= $impuesto;
                echo "El salario neto es $salario y los impuestos son $impuesto";
            }
            elseif ($salario >= 3001 && $salario <= 5000){
                $impuesto = $salario * 0.2;
                $salario -= $impuesto;
                echo "El salario neto es $salario y los impuestos son $impuesto";
            }
            else {
                $impuesto = $salario * 0.3;
                $salario -= $impuesto;
                echo "El salario neto es $salario y los impuestos son $impuesto";
            }
            echo "<a href='./index.php?salario=".$salario + $impuesto."'>Volver</a>";
        }
        else {
            echo "El valor introducido en el formulario no es valido";
        }
    }
    else {
        echo "Alguna de las variables no está definida";
    }
?>