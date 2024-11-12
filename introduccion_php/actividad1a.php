<html>
    <head></head>
    <body>
    <h1>Mi primer fichero</h1>
    <?php
        $num1 = 7;
        $num2 = 45;
        echo "La suma de $num1 y $num2 es ".$num1 + $num2."<br>";
        echo "La resta de $num1 y $num2 es ".$num1 - $num2."<br>";
        echo "La multiplicacion de $num1 y $num2 es ".$num1 * $num2."<br>";
        if ($num2 == 0) {
            echo "La division no es posible"."<br>";
        }
        else {
            echo "La division de $num1 y $num2 es ".$num1 / $num2."<br>";
        }
        if ($num2 == 0) {
            echo "La division no es posible"."<br>";
        }
        else {
            echo "El resto de $num1 y $num2 es ".$num1 % $num2."<br>";
        }
        echo "La potencia de $num1 y $num2 es ".$num1 ** $num2."<br>";
    ?>
    </body>
</html>