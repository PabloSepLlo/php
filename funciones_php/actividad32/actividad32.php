<?php
    function validarUsuario($usuario, $contrasenia){
        $valido = false;
        if ($usuario == "admin" && $contrasenia == 1234){
            $valido = true;
        }
        return $valido;
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
        Nombre: <input type="text" name="usu">
        Contrasenia: <input type="number" name="pass">
        <input type="submit" value="Comprobar">
    </form>
    <?php
        if (isset($_POST["usu"], $_POST["pass"])){
            if (validarUsuario($_POST["usu"], $_POST["pass"])){
                echo "<p style='color:green'>El usuario y la contrasenia son correctos</p>";
            }
            else {
                echo "<p style='color:red'>El usuario y la contrasenia son incorrectos</p>";
            }
        }
    ?>
</body>
</html>