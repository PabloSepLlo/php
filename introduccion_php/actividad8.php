<?php
    $cadena = "    !Hola mundo!<br>";
    $cadena_sin_espacios = trim($cadena);//ltrim para espacios de la izquierda y rtrim derecha
    echo $cadena_sin_espacios;
    $posicion = strpos($cadena_sin_espacios, "mundo");
    echo "La posicion de la palabra mundo en la cadena es $posicion<br>";
    $cadena_nueva = str_replace("mundo", "amigo", $cadena_sin_espacios);
    echo "La nueva cadena es $cadena_nueva<br>";
?>