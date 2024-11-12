<?php
    session_start();
    $mensaje = "";
    $sesion_iniciada = false;
    $sesion_expirada = false;
    if (!isset($_SESSION["user"], $_SESSION["pass"])) {
        $_SESSION["user"] = "";
        $_SESSION["pass"] = "";
    }
    if (isset($_POST["user"], $_POST["pass"])) {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pass"] = $_POST["pass"];
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
    <form method="POST" action="./formulario.php">
        USUARIO: <input type="text" name="user">
        CONTRASENA: <input type="password" name="pass">
        <input type="submit" value="Iniciar sesion">
    </form>
</body>
</html>