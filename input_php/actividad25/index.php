<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cadena = "";
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            $texto = $_POST["texto"];
            $oculto = $_POST["oculto"];
            if (isset($texto , $oculto) && !empty($texto)) {
                $cadena = $oculto . " " . $texto;
            }
            else {
                $cadena = $oculto;
            }
        }
    ?>
    <form method="post">
        <label>Texto<br><input type="text" name="texto" value=""></label>
        <input type="hidden" name="oculto" value="<?php echo $cadena ?>">
        <input type="submit" value="Enviar">
    </form>
    <?php
        echo "Texto general:<br>";
        echo $cadena;
    ?>
</body>
</html>