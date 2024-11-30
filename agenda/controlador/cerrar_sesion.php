<?php
    if (isset($_POST["cerrar"]) && $_POST["cerrar"] == "Cerrar sesion") {
        session_destroy();
        session_start();
        $_SESSION["reg"] = "Sesion cerrada de forma exitosa";
        header("Location: ../index.php");
        exit();
    }
?>