<?php
    session_start();
    include("../modelo/tareas.php");
    if (isset($_POST["tipo_vista"])){
        $_SESSION["tareas_filtradas"] = determinar_tipo_vista($_POST["tipo_vista"]);
        header('Location: ../vista/gestion_tareas.php');
        exit();
    }
    else {
        $_SESSION["err"] = "No se ha seleccionado correctamente una vista";
        header('Location: ../vista/menu_usuario.php');
        exit();
    }
?>