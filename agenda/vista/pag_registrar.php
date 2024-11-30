<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <?php
            include("../include/header.php");
        ?>
    </header>
    <main>
        <form id="registro" method="POST">
            <h1>Registrate</h1>
            <label>Nombre usuario:<br/><input type="text" name="user_name"></label><br/>
            <label>Nombre:<br/><input type="text" name="nombre"></label><br/>
            <label>Apellidos:<br/><input type="text" name="apellidos"></label><br/>
            <label>Contrasena:<br/><input type="password" name="user_pass"></label><br/>
            <label><br/><input type="submit" value="Registrate" formaction="../controlador/registrar.php"></label><br/>
            <?php
                if (isset($_SESSION["err"])){
                    echo "<p class='err'>".$_SESSION["err"]."</p>";
                    unset($_SESSION["err"]);
                }
            ?>
        </form>
    </main>
    <footer>
        <?php
            include("../include/footer.php");
        ?>
    </footer>
</body>
</html>