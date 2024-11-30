<?php
    session_start();
    include("../modelo/tareas.php");
    if (isset($_POST["borrar"]) && $_POST["borrar"] == "Borrar tareas"){
        if (isset($_SESSION["user_name"]) && isset($_SESSION["tareas_filtradas"]) && !empty($_SESSION["tareas_filtradas"])){
            borrar_tareas_usuario($_SESSION["user_name"]);
            $_SESSION["reg"] = "Las tareas se han borrado correctamente";
            header('Location: ../vista/gestion_tareas.php');
            unset($_SESSION["tareas_filtradas"]);
            exit();
        }  
        else {
            $_SESSION["err"] = "El usuario no tiene tareas";
            header('Location: ../vista/gestion_tareas.php');
            exit();
        }
    }
    else {
        $_SESSION["err"] = "No se han podido borrar las tareas";
        header('Location: ../vista/gestion_tareas.php');
        exit();
    }
?>