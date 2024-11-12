<?php
    $anio_nacimiento = 2025;
    $anio_actual = 2024;
    $edad = $anio_actual - $anio_nacimiento;
    switch (true) {
        case $edad < 18 && $edad >= 0:
            echo "$edad: Es menor de edad";
            break;
        case ($edad >= 18) && ($edad <65):
            echo "$edad: Es mayor de edad";
            break;
        case $edad >= 65:
            echo "$edad: Es jubilado";
            break;
        default:
            echo "No puede tener esa edad";
            break;
    }
?>