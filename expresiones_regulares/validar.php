<?php
session_start();
    if (isset($_POST["nya"], $_POST["tlf"], $_POST["dni"], $_POST["pass"])) {
        $_SESSION["err"] = "";
        $error = false;
        if (!preg_match("/[A-Za-z\b]/", $_POST["nya"])) {
            $_SESSION["err"] .= "Nombre y apellido no válido<br/>";
            $_SESSION["nya"] = $_POST["nya"];
            $error = true;
        }
        if(!preg_match("/^[679][0-9]{8}/", $_POST["tlf"])) {
            $_SESSION["err"] .= "Telefono movil o fijo incorrecto<br/>";
            $_SESSION["tlf"] = $_POST["tlf"];
            $error = true;
        }
        if(!preg_match("/[0-9]{8}[A-Z]/", $_POST["dni"])) {
            $_SESSION["err"] .= "DNI incorrecto<br/>";
            $_SESSION["dni"] = $_POST["dni"]; 
            $error = true;
            
        }
        if (!$error) {
            header("Location: ./exito.php");
            exit();
        }
        else {
            header("Location: ./index.php");
            exit();
        }
    }
    else {
        $_SESSION["err"] = "Debe rellenar todos los campos";
        header("Location: ./index.php");
        exit();
    }
?>