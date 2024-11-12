<html>
    <head></head>
    <body>
        <?php
            $anio1 = 1890;
            $anio2 = 2024;
            $anios_bisiestos = [];
            $tipo_punto = 'I';
            $tipo_lista = 'ol';
            $comienzo_lista = '4';
            for ($anio = $anio1; $anio <= $anio2; $anio++){
                if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)){
                    $anios_bisiestos[] = $anio;
                }
            }
            echo "Entre $anio1 y $anio2 ha habido ". count($anios_bisiestos). " anios bisiestos<br>";
            echo "Los anios bisiestos en este rango son: <br><$tipo_lista type='$tipo_punto' start='$comienzo_lista'>";
            foreach ($anios_bisiestos as $bisiesto){
                echo "<li>$bisiesto</li>";
            }
            echo "</$tipo_lista>";
        ?>
    </body>
</html>