<html>
    <head></head>
    <body>
    <h1>Mi primer fichero</h1>
    <?php
    //buen comentario
        $num1 = 24;

        $num2 = 13;

        
        if ($num1 > $num2) {
            echo "exito"; 
        };

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                echo "$i, ";
            }
        }

        echo $num1 * $num2;
    /*
        CUANTO COMENTARIO CABE AQUI!!!!
        echo gettype($csc) para saber el tipo de dato de la variable
    */ 
    ?>
    </body>
</html>