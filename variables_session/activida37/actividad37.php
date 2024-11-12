<?php
    session_start();
    if(!isset($_SESSION["newses"])){
        $_SESSION["newses"] = "";
    }
    else {
        if (isset($_POST["texto"])){
            $_SESSION["newses"] .= " ".$_POST["texto"];
        }
    }
    if (isset($_POST["Cerrar"])) {
        if ($_POST["Cerrar"] =="Limpiar") {
            unset($_SESSION["newses"]);
            $_SESSION["newses"] = "";
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
    <form method="POST">
        Texto: <input type="text" name="texto">
        <input type="submit" value="Enviar">
        <input type="submit" value="Limpiar" name="Cerrar">
    </form>
    <?php 
        echo "Para resetear escribir RESET <br/>";
        if (isset($_SESSION["newses"])){
            echo $_SESSION["newses"];
        }
    ?>
</body>
</html>