<?php
    session_start();
    if(!isset($_SESSION["aut_ad"]) && !isset($_SESSION["aut_ed"]) && !isset($_SESSION["aut_us"])){
		$_SESSION["error"]="Operacion no permitida";
		header("Location: ./index.php");
        die();
	}
    else {
        if ($_SESSION["aut_ad"]){
            $mensaje = "Ha iniciado sesion como administrador"; 
            if (isset($_POST["admin"]) && $_POST["admin"] == "Pagina administrador") {
                header("Location: ./admin.php");
                die();
            }
            else if (isset($_POST["edit"]) && $_POST["edit"] == "Pagina editor") {
                header("Location: ./edit.php");
                die();
            }
            else if (isset($_POST["usu"]) && $_POST["usu"] == "Pagina usuario") {
                header("Location: ./usu.php");
                die();
            }
        }
        else if ($_SESSION["aut_ed"]){
            $mensaje = "Ha iniciado sesion como editor"; 
            if (isset($_POST["admin"]) && $_POST["admin"] == "Pagina administrador") {
                $_SESSION["error2"] = "Eres editor, no puedes entrar en pagina de administrador";
            }
            else if (isset($_POST["edit"]) && $_POST["edit"] == "Pagina editor") {
                header("Location: ./edit.php");
                die();
            }
            else if (isset($_POST["usu"]) && $_POST["usu"] == "Pagina usuario") {
                header("Location: ./usu.php");
                die();
            }
        }
        else if ($_SESSION["aut_us"]){
            $mensaje = "Ha iniciado sesion como usuario"; 
            if (isset($_POST["admin"]) && $_POST["admin"] == "Pagina administrador") {
                $_SESSION["error2"] = "Eres usuario, no puedes entrar en pagina de administrador";
            }
            else if (isset($_POST["edit"]) && $_POST["edit"] == "Pagina editor") {
                $_SESSION["error2"] = "Eres usuario, no puedes entrar en pagina de editor";
            }
            else if (isset($_POST["usu"]) && $_POST["usu"] == "Pagina usuario") {
                header("Location: ./usu.php");
                die();
            }
        }
        if (isset($_POST["cs"]) && $_POST["cs"] == "Cerrar sesion") {
            session_destroy();
            header("Location: ./index.php");
            die();
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
    <p>
    <?php
        echo $mensaje;
    ?>
    </p>
    <form method="POST">
        <input type="submit" value="Pagina administrador" name="admin">
        <input type="submit" value="Pagina editor" name="edit">
        <input type="submit" value="Pagina usuario" name="usu"><br>
        <input type="submit" value="Cerrar sesion" name="cs">
    </form>
    <?php
		if(isset($_SESSION["error2"])){
			echo "<p style='color:red;'>".$_SESSION["error2"]."</p>";
			unset($_SESSION["error2"]);
		}
    ?>
</body>
</html>