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
        if (isset($_SESSION["nya"], $_SESSION["tlf"], $_SESSION["dni"])) {
            echo "
            <form action='./validar.php' method='POST'>
                Nombre y apellidos: <input type='text' name='nya' value='".$_SESSION["nya"]."'>
                Teléfono: <input type='number' name='tlf' value='".$_SESSION["tlf"]."'>
                DNI: <input type='text' name='dni' value='".$_SESSION["dni"]."'>
                Contrasenia: <input type='password' name='pass'>
                <input type='submit' value='Enviar'>
            </form>
            ";
        }
        else{
            echo "
            <form action='./validar.php' method='POST'>
                Nombre y apellidos: <input type='text' name='nya'>
                Teléfono: <input type='number' name='tlf'>
                DNI: <input type='text' name='dni'>
                Contrasenia: <input type='password' name='pass'>
                <input type='submit' value='Enviar'>
            </form>
            ";
        }
        
        if (isset($_SESSION["err"])){
            echo $_SESSION["err"];
            unset($_SESSION["err"]);
        }    
    ?>
</body>
</html>