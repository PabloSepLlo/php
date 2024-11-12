<?php
    session_start();
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
    if ($_SESSION["user"] == "admin" && $_SESSION["pass"] == "1234") {
        $sesion_iniciada = true;
        $_SESSION['tiempo_inicial'] = time();
        $tiempo_pasado = time() - $_SESSION['tiempo_inicial'];
        if (isset($_POST["cerrar"])) {
            session_destroy();
        }
        if ($tiempo_pasado > 10) {
            $sesion_expirada = true;
            session_destroy();
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
<?php
    if ($sesion_iniciada) {
        echo "La sesion se ha iniciado";
    }
    if ($sesion_expirada) {
        echo "La sesion ha expirado";
    }
    ?>
    <form action="./actividad39.php" method="POST">
        <input type="submit" value="CERRAR SESION" name="cerrar">
    </form>
</body>
</html>