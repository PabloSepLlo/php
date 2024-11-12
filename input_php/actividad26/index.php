<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./archivo.php" method="post">
        <label>Nombre: <input type="text" name="nombre"></label><br>
        <label>Sexo:
            <select name="sexo">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </label><br>
        <label>Num. de hijos: <input type="number" name="n_hijos"></label><br>
        <label><input type="submit" value="enviar"></label>
    </form>
</body>
</html>