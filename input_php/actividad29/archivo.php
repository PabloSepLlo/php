<?php
    $productos = [];
    $nombre = $_POST["nombre"];
    $n_productos = $_POST["n_productos"];
    $precio_unidad = $_POST["precio"];
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($nombre, $n_productos, $precio_unidad) && !empty($nombre) && is_numeric($precio_unidad) && is_numeric($n_productos)){
            if ($precio_unidad > 0 && $n_productos > -1) {
                $productos[] = [$nombre, $n_productos, $n_productos * $precio_unidad];
            }
            else {
                echo "No se puede almacenar";
            }
        }
        else {
            echo "Alguno de los campos está vacío";
        }

    }
?>