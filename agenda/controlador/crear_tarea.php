<?php
    session_start();
    include("../modelo/tareas.php");
    if (isset($_POST["titulo"], $_POST["descripcion"], $_POST["fecha"], $_POST["hora"], $_POST["estado"], $_POST["user_name"]) && !empty($_POST["titulo"]) && !empty($_POST["descripcion"]) && !empty($_POST["fecha"]) && !empty($_POST["hora"]) && !empty($_POST["estado"]) && !empty($_POST["user_name"])) {
        if (crear_tarea($_POST["titulo"], $_POST["descripcion"], $_POST["fecha"], $_POST["hora"], $_POST["estado"], $_POST["user_name"])) {
            $_SESSION["reg"] = "La tarea con titulo '".$_POST["titulo"]."' se ha creado correctamente";
            header('Location: ../vista/menu_usuario.php');
            exit();
        }
    }
    else {
        $_SESSION["err"] = "Completa todos los campos para agregar la tarea";
        header('Location: ../vista/formulario_tarea.php');
        exit();
    }
?>