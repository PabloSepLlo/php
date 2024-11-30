<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION["error"])){
            echo "<p style='color:red;'>".$_SESSION["error"]."</p><br/>";
            unset($_SESSION["error"]);
        }
        if (isset($_COOKIE["bloqueo"])) {
            echo "<p style='color:red;'>LA PÁGINA HA SIDO BLOQUEADA POR SUPERAR LOS INTENTOS DE INICIO DE SESIÓN</p>";
        }
        else {
            echo "
            <form action='./validar.php' method='POST'>
                Usuario: <input type='text' name='user'>
                Contrasena: <input type='password' name='pass'>
                <input type='submit' value='Comprobar'>
            </form>
            ";
        }
        
    ?>
    
</body>
</html>