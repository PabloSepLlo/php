<html>
    <head></head>
    <body>
    <h1>Mi primer fichero</h1>
    <?php
        $saldo = 1000;
        echo "El saldo inicial es ".$saldo. "<br>";
        echo "El saldo es ".($saldo -= 100) . "<br>";
        echo "El saldo es ".($saldo -= 200) . "<br>";
        echo "El saldo es ".($saldo -= 300) . "<br>";
    ?>
    </body>
</html>