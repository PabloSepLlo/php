<?php
    $valores = [];
    if (isset($_POST["f"], $_POST["c"])){
        $filas = $_POST["f"];
        $columnas = $_POST["c"];
    }
    elseif (isset($_GET["f"], $_GET["c"])) {
        $filas = $_GET["f"];
        $columnas = $_GET["c"];
    }
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["columnas_oculto"], $_POST["filas_oculto"])){
            $filas = $_POST["filas_oculto"];
            $columnas = $_POST["columnas_oculto"];
        }
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                if (isset($_POST["c$i$j"])) {
                    $valores["c$i$j"] = $_POST["c$i$j"];
                }
            }
        }
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
        <table border=1>
            <tr>
                <th colspan="<?php echo $columnas; ?>">Horario</th>
            </tr>
            <?php
                echo "<tr>";
                for ($i = 0; $i < $columnas; $i++) {
                    echo "<th>Columna". $i + 1 ."</th>";
                }
                echo "</tr>";
                for ($i = 0; $i < $filas; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $columnas; $j++) {
                        //Si hay un elemento en la array valores que tiene un indice como el de la celda en la que estamos
                        //le da como valor predeterminado al input el que tenía cuando se relleno la primera vez, si no ponemos una cadena vacía
                        if (isset($valores["c$i$j"])) {
                            $valor_actual = $valores["c$i$j"];
                        } else {
                            $valor_actual = '';
                        }                        
                        echo "<td>Escriba: <input type='text' name='c$i$j' value='$valor_actual'></td>";
                        //No hace falta hacer un hidden porque los valores se reciben por post y no es necesario guardarlos para recogerlos
                        //se agregan directamente al value del input si su key coincide. No estoy haciendo un registro historico, solo estoy guardando
                        //lo ultimo que se ha puesto (si se ha actualizado y si no se mantiene igual en base a la lista)
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <input type="submit" value="VER TABLA" formaction="./actividad31.php">
        <input type="hidden" name="columnas_oculto" value="<?php echo $columnas; ?>">
        <input type="hidden" name="filas_oculto" value="<?php echo $filas; ?>">
        <input type="submit" value="GUARDAR">
    </form>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </?php
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["f"], $_POST["c"])){
                $filas = $_POST["f"];
                $columnas = $_POST["c"];
                if ($filas > 0 && $columnas > 0) {
                    echo "
                    <table border=1>
                        <tr><th colspan='$columnas'>Horario</th></tr>";
                        echo "<tr>";
                        for ($i = 0; $i < $columnas; $i++) {
                            echo "<th>Columna". $i + 1 ."</th>";
                        }
                        echo "</tr>";
                        for ($i = 0; $i < $filas; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < $columnas; $j++) {
                                echo "<td>Prueba</td>";
                            }
                            echo "</tr>";
                        }
                    echo "</table>";
                }
            }
        }
        elseif ($_SERVER ["REQUEST_METHOD"] == "GET") {
            if (isset($_GET["f"], $_GET["c"])) {
                $filas = $_GET["f"];
                $columnas = $_GET["c"];
                if ($filas > 0 && $columnas > 0) {
                    echo "
                    <table border=1>
                        <tr><th colspan='$columnas'>Horario</th></tr>";
                        echo "<tr>";
                        for ($i = 0; $i < $columnas; $i++) {
                            echo "<th>Columna". $i + 1 ."</th>";
                        }
                        echo "</tr>";
                        for ($i = 0; $i < $filas; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < $columnas; $j++) {
                                echo "<td>Prueba</td>";
                            }
                            echo "</tr>";
                        }
                    echo "</table>";
                }
                echo "<a href='./tablaHorario.php?f=$filas&c=$columnas'></a>";
            }
        }
        else {
            echo "Error";
        }
    ?>
</body>
</html>-->
