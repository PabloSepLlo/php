<?php
    session_start();
    if (!$_SESSION["user_name"]) {
        $_SESSION["msg"] = "No se ha accedido mediante inicio de sesion a esta pagina";
        header('Location: ../index.php');
        exit();
    }
    $hoy = date("d/m/Y",time());
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
        <form method="POST" action="../controlador/filtrar_tareas.php">
            Selecciona el tipo de vista con el que quieres ver tus tareas: 
            <select name="tipo_vista">
                <option value="Semanal">Semanal</option>
                <option value="Diario">Diario</option>
                <option value="Mensual">Mensual</option>
            </select>
            <input type="submit" value="Filtrar">
        </form>
        
        <?php
            if (isset($_SESSION["tareas_filtradas"]) && $_SESSION["tareas_filtradas"][0] == "Diario" && !empty($_SESSION["tareas_filtradas"][1])) {
                echo "<h1>Las tareas del dia $hoy son:</h1>";
                echo "<ul>";    
                    for ($i = 0; $i < count($_SESSION["tareas_filtradas"][1]); $i++) {
                        if ($_SESSION["tareas_filtradas"][1][$i][6] == $_SESSION["user_name"]) {
                            echo "<li><a href=''>Titulo: ".$_SESSION["tareas_filtradas"][1][$i][1].", fecha: ".$_SESSION["tareas_filtradas"][1][$i][3]."</a></li>";
                        }
                    }
                                  
                echo "</ul>";
            }    
            else if (isset($_SESSION["tareas_filtradas"]) && $_SESSION["tareas_filtradas"][0] == "Semanal" && !empty($_SESSION["tareas_filtradas"][1])) {
                echo "<table><tr>";
                for ($dia = 1; $dia < 8; $dia++) {
                    echo "<th>".date("l", strtotime("Sunday +". ($dia) ."days"))."</th>";
                }
                echo "</tr><tr>";
                for ($dia = 1; $dia < 8; $dia++) {
                    $tareas_impresas = false;
                    for ($i = 0; $i < count($_SESSION["tareas_filtradas"][1]); $i++) {
                        if ($_SESSION["tareas_filtradas"][1][$i][6] == $_SESSION["user_name"]) {
                            if (date("N", strtotime("Sunday +". $dia ."days")) == date("N", strtotime($_SESSION["tareas_filtradas"][1][$i][3]))){   
                                echo "<td><a href='edicion_tarea.php?id=".$_SESSION["tareas_filtradas"][1][$i][0]."'>Titulo: ".$_SESSION["tareas_filtradas"][1][$i][1].", fecha: ".$_SESSION["tareas_filtradas"][1][$i][3]."</a></td>";
                                $tareas_impresas = true;
                            }
                        }
                    }
                    if(!$tareas_impresas) {
                        echo "<td>Sin tareas</td>";
                    }
                }   
                echo "</tr></table>";
            }
            else if (isset($_SESSION["tareas_filtradas"]) && $_SESSION["tareas_filtradas"][0] == "Mensual" && !empty($_SESSION["tareas_filtradas"][1])) {
                echo "<table><tr>";
            }
            if (isset($_SESSION["err"])){
                echo "<p class='err'>".$_SESSION["err"]."</p>";
                unset($_SESSION["err"]);
            } 
            if (isset($_SESSION["reg"])){
                echo "<p class='reg'>".$_SESSION["reg"]."</p>";
                unset($_SESSION["reg"]);
            }      
        ?>
        <form method="POST" action="../controlador/borrar_tareas.php">
            <input type="submit" name="borrar" value="Borrar tareas">
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