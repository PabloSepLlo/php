<!--muestra la fecha y la hora actual en formato largo(miercoles, 5 de marzo de 2025,14:35:20).
muestra la fecha del proximo martes.
imprime los proximos 10 años bisiestos
pide al usuario que introduzca su fecha de nacimiento y calcula cuantos dias quedan hasta su proximo cumpleaños -->
<?php

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    $meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
    $dia_letra = date("N", time()) - 1;
    $mes = date("n", time()) - 1;
    $ano = date("Y", time());
    $dia_numero = date("j", time());
    $hora = date("H:i:s", time());
    echo "$dias[$dia_letra], $dia_numero de $meses[$mes] de $ano, $hora<br/>";
    echo date("d - m - y", strtotime("next tuesday"))."<br/>";
    $bisiesto = 0;
    $fecha = time();
    while ($bisiesto < 10) {
        if(date("L", $fecha)){
            echo date("Y", $fecha)."<br/>";
            $bisiesto += 1;
        }
        $fecha = strtotime("+1 year", $fecha);
    }
?>