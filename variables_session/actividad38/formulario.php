<?php
    session_start();
    if (!isset($_SESSION["PROD"])) {
        $_SESSION["PROD"] = [];
    }
    else {
        if (isset($_POST["nuevo"]) && $_POST["nuevo"] == "Añadir") {
            if (isset($_POST["id"], $_POST["nombre"], $_POST["precio"], $_POST["cantidad"])){
                $_SESSION["PROD"][] = [$_POST["id"], $_POST["nombre"], $_POST["precio"], $_POST["cantidad"]];
            }
        }
        if (isset($_POST["limpiar"]) && $_POST["limpiar"] == "Limpiar") {
            unset($_SESSION["PROD"]);
            $_SESSION["PROD"] = [];
        }

        if (isset($_POST["+"]) && isset($_POST["ocultoId1"]) && $_POST["+"] == "+"){
            for ($i = 0; $i < count($_SESSION["PROD"]); $i++){
                if ($_SESSION["PROD"][$i][0] == $_POST["ocultoId1"]) {
                    $_SESSION["PROD"][$i][3]++;
                }
            }
        }
        if (isset($_POST["-"]) && isset($_POST["ocultoId1"]) && $_POST["-"] == "-"){
            $lista_provisional = $_SESSION["PROD"];
            $lista_definitiva = [];
            for ($i = 0; $i < count($lista_provisional); $i++){
                if ($lista_provisional[$i][0] == $_POST["ocultoId1"]) {
                    $lista_provisional[$i][3]--;
                }
                if ($lista_provisional[$i][3] > 0) {
                    $lista_definitiva[] = $lista_provisional[$i];
                }
            }
            $_SESSION["PROD"] =  $lista_definitiva;
        }
        if (isset($_POST["delet"]) && isset($_POST["ocultoId2"]) && $_POST["delet"] == "Borrar"){
                $lista_provisional = $_SESSION["PROD"];
                $lista_definitiva = [];
            for ($i = 0; $i < count($lista_provisional); $i++){
                if ($lista_provisional[$i][0] != $_POST["ocultoId2"]) {
                    $lista_definitiva[] = $lista_provisional[$i];
                }
            }
            $_SESSION["PROD"] =  $lista_definitiva;
        }
        if (isset($_POST["save"]) && isset($_POST["ocultoId2"]) && isset($_POST["nombre"], $_POST["precio"]) && $_POST["save"] == "Guardar"){
            for ($i = 0; $i < count($_SESSION["PROD"]); $i++){
                if ($_SESSION["PROD"][$i][0] == $_POST["ocultoId2"]) {
                    $_SESSION["PROD"][$i][1] = $_POST["nombre"];
                    $_SESSION["PROD"][$i][2] = $_POST["precio"];
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
        ID: <input type="number" name="id">
        NOMBRE: <input type="text" name="nombre">
        PRECIO: <input type="number" name="precio">
        CANTIDAD: <input type="number" name="cantidad">
        <input type="submit" value="Añadir" name="nuevo">
        <input type="submit" value="Limpiar" name="limpiar">
    </form>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
        </tr>
        <?php
            if (!empty($_SESSION["PROD"])){
                for ($i = 0; $i < count($_SESSION["PROD"]); $i++) {
                    if (!isset($_POST["edit"])){
                        echo "<tr>
                        <td>".$_SESSION["PROD"][$i][0]."</td>
                        <td>".$_SESSION["PROD"][$i][1]."</td>
                        <td>".$_SESSION["PROD"][$i][2]."</td>
                        <form method='POST'>
                        <td>".$_SESSION["PROD"][$i][3]."<input type='submit' value='+' name='+'><input type='submit' value='-' name='-'></td>
                        <td><input type='submit' value='Editar' name='edit'></td>
                        <input type='hidden' name='ocultoId1' value='".$_SESSION["PROD"][$i][0]."'>
                        </form></tr>";
                    }
                    elseif (isset($_POST["edit"], $_POST["ocultoId1"]) && $_POST["ocultoId1"] == $_SESSION["PROD"][$i][0]){
                        echo "<tr>
                        <td>".$_SESSION["PROD"][$i][0]."</td>
                        <form method='POST'>
                        <td><input type='text' name='nombre' value='".$_SESSION["PROD"][$i][1]."'/></td>
                        <td><input type='number' name='precio' value='".$_SESSION["PROD"][$i][2]."'></td>
                        <td>".$_SESSION["PROD"][$i][3]."</td>
                        <td><input type='submit' value='Guardar' name='save'><input type='submit' value='Borrar' name='delet'></td>
                        <input type='hidden' name='ocultoId2' value='".$_SESSION["PROD"][$i][0]."'>
                        </form>";
                    }
                }
            }
        ?>
    </table>
</body>
</html>

