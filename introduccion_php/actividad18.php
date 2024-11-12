<?php
    $dni = "03149131V";
    $letra_dni = $dni[8];
    $numeros_dni = intval(substr($dni, 0, 8));
    $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D",
    "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
    if (strlen($dni) != 9) {
        echo "La longitud del dni no es correcta";
    }
    else {
        if ($letra_dni == $letras[$numeros_dni % 23]) {//para sacar las posiciones de la array se hace una lista con array_keys($lista)
            echo "El dni es correcto";
        }
        else {
            echo "El dni es incorrecto";
        }
    }
?>