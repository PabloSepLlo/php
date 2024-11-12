<!DOCTYPE html>
    <head></head>
    <body>
        <form action="./archivo.php" method="GET">
            <label>Salario: <input type="number" name="salario" value="<?php if (isset($_GET['salario'])){echo $_GET['salario'];}?>"></label>
            <input type="submit">
        </form>
    </body>
</html>