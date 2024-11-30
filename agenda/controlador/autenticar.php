<?php
    session_start();
    include("../modelo/usuario.php");
    if (isset($_POST["user_name"], $_POST["user_pass"]) && !empty($_POST["user_name"]) && !empty($_POST["user_pass"])) {
        if (autenticar($_POST["user_name"], $_POST["user_pass"])) {
            $_SESSION["ini"] = "Bienvenido, ".$_POST["user_name"]. ". ¿Qué quieres hacer?";
            $_SESSION["user_name"] = $_POST["user_name"];
            header('Location: ../vista/menu_usuario.php');
            exit();
        }
        else {
            $_SESSION["err"] = "No existe un usuario con estas credenciales";
            header('Location: ../index.php');
            exit();
        }
    }
    else {
        $_SESSION["err"] = "Alguno de los campos esta incompleto";
        header('Location: ../index.php');
        exit();
    }
?>