<?php
    //a
    $num = '3';
    $entero = (int) $num;
    echo $entero * 2 . "<br>";
    //b
    $int = 3;
    $string = (string) $num;
    echo $string." es mi numero fav y su tipo es ". gettype($string)."<br>";
    //c
    $float = 3.78;
    $redondeado = round($float);
    echo $redondeado." es el numero redondeado <br>";
    //d
    $bool = false;
    $numerico = (int) $bool;
    echo "El valor es ".$numerico." y es ".gettype($numerico)."<br>";
    //e
    $ente = 7;
    $flot = (float) $ente;
    echo "$flot es de tipo".gettype($flot)." y dividido da ". $flot / 3 ."<br>";
    //f
    $cadena = ''; //Si la cadena esta vacía no aparece nada (sería falso)
    $booli = (bool) $cadena;
    echo $booli." ahora es un ". gettype($booli);
?>