<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <?php
            include("./include/header.php");
        ?>
    </header>
    <main>
        <form id="inicio" method="POST">
            <h1>Iniciar sesion</h1>
            <label>Nombre:<br/><input type="text" name="user_name"></label><br/>
            <label>Contrasena:<br/><input type="password" name="user_pass"></label><br/>
            <label><br/><input type="submit" value="Iniciar sesion" formaction="./controlador/autenticar.php"></label><br/>
            <label>¿No tienes una cuenta? <a href="./vista/pag_registrar.php">Registrate</a></label>
            <?php
                if (isset($_SESSION["err"])){
                    echo "<p class='err'>".$_SESSION["err"]."</p>";
                    unset($_SESSION["err"]);
                }
                if (isset($_SESSION["reg"])){
                    echo "<p class='reg'>".$_SESSION["reg"]."</p>";
                    unset($_SESSION["reg"]);
                }
            ?>
        </form>
        
    </main>
    <footer>
        <?php
            include("./include/footer.php");
        ?>
    </footer>
</body>
</html>