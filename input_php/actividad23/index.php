<!DOCTYPE html>
    <head></head>
    <body>
        <form action="./archivo.php" method="GET">
            <label>Nombre: <input type="text" name="nombre" value="<?php if (isset($_GET['nombre'])){echo $_GET['nombre'];}?>"></label>
            <label>Telefono: <input type="number" name="tlf" value="<?php if (isset($_GET['tlf'])){echo $_GET['tlf'];}?>"></label>
            <label>Mail: <input type="mail" name="mail" value="<?php if (isset($_GET['mail'])){echo $_GET['mail'];}?>"></label>
            <label>Mensaje: <input type="text" name="msg" value="<?php if (isset($_GET['msg'])){echo $_GET['msg'];}?>"></label>
            <input type="submit">
        </form>
    </body>
</html>
