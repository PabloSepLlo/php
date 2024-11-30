<?php
    session_start();
    include("../modelo/usuario.php");
    if (isset($_POST["user_name"], $_POST["user_pass"], $_POST["nombre"], $_POST["apellidos"]) && !empty($_POST["user_name"]) && !empty($_POST["user_name"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"])) {
        if (registrar($_POST["user_name"], $_POST["nombre"], $_POST["apellidos"], $_POST["user_pass"])) {
            $_SESSION["reg"] = "El usuario ".$_POST["nombre"]. " " .$_POST["apellidos"]." se ha registrado correctamente, introduzca sus credenciales";
            header('Location: ../index.php');
            exit();
        }
        else {
            $_SESSION["err"] = "El nombre de usuario introducido no es valido";
            header('Location: ../vista/pag_registrar.php');
            exit();
        }
    }
    else {
        $_SESSION["err"] = "Alguno de los campos esta incompleto";
        header('Location: ../vista/pag_registrar.php');
        exit();
    }
?>