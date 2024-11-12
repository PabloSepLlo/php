<?php
    for ($a = 1; $a <= 10; $a++) {
        echo "$a, ";
    }  
    echo "<br>";
    $b = 60;
    do {
        echo "$b, ";
        $b++;
    } while ($b <= 70);

    echo "<br>";  
    for ($c = 20; $c >= 1; $c--) {
        echo "$c, ";
    }
    echo "<br>";  
    for ($d = 1; $d <= 1000; $d++) {
        echo "$d, ";
    }
    echo "<br>";  
    for ($f = 1; $f <= 10; $f++) {
        echo "5 x $f = ". 5 * $f ."<br>";
    }
    echo "<br>";  
    $suma = 0;
    for ($g = 1; $g <= 100; $g++) {
        $suma += $g; 
    }
    echo "La suma de los 100 primeros numeros es $suma";
    echo "<br>";  
    for ($h = 5; $h <= 100; $h++) {
        if ($h % 2 == 0){
            echo "$h, ";
        }
    }
    echo "<br>";
    for ($num = 5; $num <= 100; $num++) {
        $es_primo = true;
        for ($j = 2; ($j < $num) && ($es_primo) ; $j++)
            if ($num % $j == 0) {
                $es_primo = false;
            }
        if ($es_primo) {
            echo "$num, ";
        }
    }
    echo "<br>";
    for ($g = 1; $g <= 1000; $g++) {
        for ($espa = 0; $espa < $g; $espa++){
            echo "&nbsp";
        }
        echo "$g <br>";
    }

?>