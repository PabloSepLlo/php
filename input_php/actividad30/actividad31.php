<?php
    $valores = [];
    $colores = [];
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["columnas_oculto"], $_POST["filas_oculto"])){
            $filas = $_POST["filas_oculto"];
            $columnas = $_POST["columnas_oculto"];
        }
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                if (isset($_POST["c$i$j"])) {
                    $color_distinto = true;
                    foreach ($valores as $valor){
                        if ($_POST["c$i$j"] == $valor[0]){
                            $color_distinto = false;
                            $color_repetido = [$valor[1][0], $valor[1][1], $valor[1][2]];
                        }
                    }
                    if ($color_distinto) {
                        $valores["c$i$j"] = [$_POST["c$i$j"], [random_int(0, 255), random_int(0, 255), random_int(0, 255)]];
                    }
                    else {
                        $valores["c$i$j"] = [$_POST["c$i$j"], [$color_repetido[0], $color_repetido[1], $color_repetido[2]]];
                    }
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
                            $valor_actual = $valores["c$i$j"][0];
                        } else {
                            $valor_actual = '';
                            
                        }

                        echo "<td style='background-color: rgb(" . $valores["c$i$j"][1][0] . ", " . $valores["c$i$j"][1][1] . ", " . $valores["c$i$j"][1][2] . ")'>$valor_actual</td>";
                       
                        //No hace falta hacer un hidden porque los valores se reciben por post y no es necesario guardarlos para recogerlos
                        //se agregan directamente al value del input si su key coincide. No estoy haciendo un registro historico, solo estoy guardando
                        //lo ultimo que se ha puesto (si se ha actualizado y si no se mantiene igual en base a la lista)
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>
