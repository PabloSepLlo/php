<html>
    <head></head>
    <body>
    <h1>Mi primer fichero</h1>
    <?php
        $horas_totales = 8640; 
        $dias_totales = intval($horas_totales / 24); 
        $horas = $horas_totales % 24; //horas sobrantes del dia
        $meses_totales = intval($dias_totales / 30);
        $dias = $dias_totales % 30; //dias sobrantes del mes
        $año = intval($meses_totales / 12);
        $meses = $meses_totales % 12; // meses que sobran del año
        echo "Son $año años, $meses meses, $dias dias y $horas horas";
    ?>
    </body>
</html>