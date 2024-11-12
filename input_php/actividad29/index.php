<?php
    $contador_productos = 0;
    $productos = [];
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nombre"], $_POST["n_productos"], $_POST["precio"], $_POST["contador_oculto"])){
            $nombre = $_POST["nombre"];
            $n_productos = $_POST["n_productos"];
            $precio_unidad = $_POST["precio"];
            $contador_oculto = $_POST["contador_oculto"];
            for ($i = 0; $i < $contador_oculto; $i++) {
                if (isset($_POST["n$i"], $_POST["c$i"], $_POST["p$i"])) {
                    $productos[] = [$_POST["n$i"], $_POST["c$i"], $_POST["p$i"]];
                }
            }
            if (!empty($nombre) && is_numeric($precio_unidad) && is_numeric($n_productos)){
                if ($precio_unidad > 0 && $n_productos > -1) {
                        $nuevo_producto = true;
                    for ($i = 0; $i < $contador_oculto; $i++) {
                        if ($nombre == $productos[$i][0]) {
                            $productos[$i][1] += $n_productos;
                            $nuevo_producto = false;
                            $contador_productos = $contador_oculto;
                        }
                    }
                    if ($nuevo_producto) {
                        $productos[] = [$nombre, $n_productos, $precio_unidad];
                        $contador_productos = $contador_oculto + 1;
                    }
                    foreach ($productos as $producto) {
                        if ($producto[1] > 0){
                            $productos_definitivo[] = $producto;
                        } 
                    }
                }
                else {
                    echo "No hay productos o el precio es erroneo";
                }
            }
            else {
                echo "Alguno de los campos o la lista de productos está vacío";
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
    <form method="post">
        <label>Nombre producto: <input type="text" name="nombre"/></label><br/>
        <label>Num. de productos: <input type="number" name="n_productos"/></label><br/>
        <label>Precio de unidad: <input type="text" name="precio"/></label><br/>
        
        <?php 
            echo "<input type='hidden' name='contador_oculto' value='".$contador_productos."'/>";
            if (!empty($productos_definitivo)){
                for ($i = 0; $i < $contador_productos; $i++) {
                    echo "
                    <input type='hidden' name='n$i' value='". $productos[$i][0]. "'>
                    <input type='hidden' name='c$i' value='". $productos[$i][1]. "'>
                    <input type='hidden' name='p$i' value='". $productos[$i][2]. "'>
                    ";
                }
            }
        ?>
        <label><input type="submit" value="ENVIAR"></label>
    </form>
    <?php 
        if (!empty($productos_definitivo)){
            foreach ($productos_definitivo as $producto) {
                echo "Nombre: $producto[0]. Cantidad: $producto[1]. Precio: $producto[2] euros. <br>";
            }
        }
    ?>
</body>
</html>