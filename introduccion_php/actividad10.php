<?php
    $amigos = ['Juli', 'Raul', 'Juan', 'Andrea'];
    echo "$amigos[1] se va de viaje<br>";
    $ciudades = ['Barna', 'Madrid', 'Berlin', 'London', 'Buenos Aires'];
    echo "$amigos[3] se ha ido a $ciudades[4]<br>";
    $amigos_desordenados = shuffle($amigos);//cambia el orden cada vez
    $ciudades_desordenadas = shuffle($ciudades);
    echo "$amigos[1] se va con $amigos[2] a la ciudad de $ciudades[3]"
?>