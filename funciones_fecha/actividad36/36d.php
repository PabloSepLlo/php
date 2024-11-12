<?php
    if (isset($_POST["cump"])){
        $fecha_nacimiento = strtotime($_POST["cump"]);
        $dia = date("d", $fecha_nacimiento);
        $mes = date("m", $fecha_nacimiento);
        $ano_actual = date("Y");
        $cumpleanos_este_ano = strtotime("$ano_actual-$mes-$dia");
        if ($cumpleanos_este_ano < time()){
            $cumpleanos_este_ano = strtotime(($ano_actual + 1)."-$mes-$dia");
        }
        $fecha_actual = time();
        $diferencia = $cumpleanos_este_ano - $fecha_actual;
        $dias_restantes = (int)($diferencia / (60 * 60 * 24));
        $mensaje = "Faltan $dias_restantes dias";
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Introduzca su fecha de nacimiento: <input type="date" name="cump">
        <input type="submit" value="Calcular">
    </form>
    <?php 
        if (isset($_POST["cump"])){
            echo $mensaje;
        }
    ?>
</body>
</html>