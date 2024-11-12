<?php
    if (isset($_POST["n"])){
        $numeros = $_POST["n"];
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
    <form method="POST">
        Cuantos numeros va a querer operar: <input type="number" name="n">
        <input type="hidden" name="numeros_op" value="<?php echo $numeros; ?>">
        <input type="submit" value="Introducir numeros" formaction="./operar.php">
    </form>
</body>
</html>