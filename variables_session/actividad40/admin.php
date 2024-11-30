<?php
    if (isset($_POST["vmenu"]) && $_POST["vmenu"] == "Volver al menu"){
        header("Location: ./menu.php");
        die();
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
    <p>Estas en la pagina haciendo cosas de administrador</p>
    <form method="POST">
        <input type="submit" value="Volver al menu" name="vmenu">
    </form>
</body>
</html>