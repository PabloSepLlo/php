<?php
    $anio = 2023;
    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)){
        echo "$anio es bisiesto";
    }
    else {
        echo "$anio no es bisiesto";
    }
?>