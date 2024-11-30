<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            border: solid black 3px; 
            margin: 20px; 
            width: 200px;
        }
        p {
            color: red;
        }
    </style>
</head>
<body>
    <button><a href="./carrito.php">Ver carrito</a></button>
    <?php
        if(isset($_SESSION["msg"])){
            echo "<p>".$_SESSION["msg"]."</p>";
            unset($_SESSION["msg"]);
        }
    ?>
    <section>
        <form action="./agregar_producto.php" method="POST">
            <input type="hidden" name="id" value="01">
            Patatas<input type="hidden" name="nombre" value="patata"><br/>
            20 $<br/>
            <input type="hidden" name="precio" value="20">
            <input type="number" name="cant"><br/>
            <input type="submit" value="Agregar al carrito"><br/>
        </form>
    </section>    
    <section>
        <form action="./agregar_producto.php" method="POST">
            <input type="hidden" name="id" value="02">
            Lechuga<input type="hidden" name="nombre" value="lechuga"><br/>
            20 $<br/>
            <input type="hidden" name="precio" value="15">
            <input type="number" name="cant"><br/>
            <input type="submit" value="Agregar al carrito">
        </form>
    </section>    
    <section>
        <form action="./agregar_producto.php" method="POST">
            <input type="hidden" name="id" value="03">
            Zanahorias<input type="hidden" name="nombre" value="zanahoria"><br/>
            20 $<br/>
            <input type="hidden" name="precio" value="10">
            <input type="number" name="cant"><br/>
            <input type="submit" value="Agregar al carrito">
        </form>
    </section>  
</body>
</html>