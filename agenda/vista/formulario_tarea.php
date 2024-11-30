<?php
    session_start();
    if (!$_SESSION["user_name"]) {
        $_SESSION["msg"] = "No se ha accedido mediante inicio de sesion a esta pagina";
        header('Location: ../index.php');
        exit();
    }
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
            <h1>CREA TU TAREA</h1>
            <label>Titulo:<br/><input type="text" name="titulo"></label><br/>
            <label>Descripcion:<br/><textarea name="descripcion" rows="5" columns="10"></textarea></label><br/>
            <label>Fecha:<br/><input type="date" name="fecha"></label><br/>
            <label>Hora:<br/><input type="time" name="hora"></label><br/>
            <input type="hidden" name="estado" value="pendiente">
            <input type="hidden" name="user_name" value="<?php echo isset($_SESSION["user_name"]) ? $_SESSION["user_name"] : ''; ?>">
            <label><br/><input type="submit" value="Agregar tarea" formaction="../controlador/crear_tarea.php"></label><br/>
            <?php
                if (isset($_SESSION["err"])){
                    echo "<p class='err'>".$_SESSION["err"]."</p>";
                    unset($_SESSION["err"]);
                }
            ?>
        </form>
        <a href="menu_usuario.php">Volver al menu</a>
    </main>
    <footer>
        <?php
            include("../include/footer.php");
        ?>
    </footer>
</body>
</html>