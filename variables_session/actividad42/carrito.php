<?php
    session_start();
    if (isset($_POST["volver"])) {
        header("Location: ./index.php");
        exit(); 
    }
    if (isset($_POST["borrar"])) {
        header("Location: ./borrar_carrito.php");
        exit(); 
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
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
        </tr>
        <?php
            if (isset($_COOKIE["carrito"])){
                $carrito = unserialize($_COOKIE["carrito"]);
                for ($i = 0; $i < count($carrito); $i++){
                    echo "<tr><td>".$carrito[$i][0]."</td><td>".$carrito[$i][1]."</td><td>".$carrito[$i][2]."</td><td>".$carrito[$i][3]."</td></tr>";
                }
            }
        ?>
    </table><br/>
    <form method="POST">
        <input type="submit" value="Volver a catálogo" name="volver">
        <input type="submit" value="Borrar carrito" name="borrar">
    </form>
</body>
</html>