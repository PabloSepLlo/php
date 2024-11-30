<?php
    session_start();
    include("../modelo/tareas.php");
    if (isset($_SESSION["user_name"])){
        if (comprobar_tareas($_SESSION["user_name"])) {
            header('Location: ../vista/gestion_tareas.php');
            exit();
        }
        else {
            $_SESSION["err"] = "Todavía no tienes tareas creadas. Añade algunas nuevas antes de visualizar";
            header('Location: ../vista/menu_usuario.php');
            exit();
        }
    }
    else {
        $_SESSION["err"] = "Error de autenticacion";
        header('Location: ../index.php');
        exit();
    }
?>