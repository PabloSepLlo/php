<?php
    session_start();
    if (!$_SESSION["user_name"]) {
        $_SESSION["err"] = "No se ha accedido mediante inicio de sesion a esta pagina";
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
        <?php
            if (isset($_SESSION["ini"])){
                echo "<p class='ini'>".$_SESSION["ini"]."</p>";
            }
        ?>    
        <nav>
            <a href="./formulario_tarea.php">Crea una nueva tarea</a><br/><a href="../controlador/comprobar_tareas.php">Ver tareas</a>
        </nav>
        <form method="POST" action="../controlador/cerrar_sesion.php">
            <input type="submit" name="cerrar" value="Cerrar sesion">
        </form>
        <?php
            if (isset($_SESSION["reg"])){
                echo "<p class='reg'>".$_SESSION["reg"]."</p>";
                unset($_SESSION["reg"]);
            }
            if (isset($_SESSION["err"])){
                echo "<p class='err'>".$_SESSION["err"]."</p>";
                unset($_SESSION["err"]);
            }
        ?>   
    </main>
    <footer>
        <?php
            include("../include/footer.php");
        ?>
    </footer>
</body>
</html>