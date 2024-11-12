<?php
    $nombre = $_POST["nombre"];
    $destino = $_POST["destino"];
    $n_billetes = $_POST["n_billetes"];
    if (!isset($_POST["oculto_BBAA"], $_POST["oculto_NY"], $_POST["oculto_LA"])){
        $restantes1 = 50;
        $restantes2 = 30;
        $restantes3 = 20;
    }
    else {
        $restantes1 = $_POST["oculto_BBAA"];
        $restantes2 = $_POST["oculto_NY"];
        $restantes3 = $_POST["oculto_LA"];
        if ($_SERVER ["REQUEST_METHOD"] == "POST") {
            if (isset($nombre, $destino, $n_billetes) && !empty($nombre) && !empty($destino) && is_numeric($n_billetes)){
                if ($destino == "BBAA") {
                    $restantes1-=$n_billetes;
                    if ($n_billetes >= $restantes1) {
                        $mensaje = "No quedan asientos para Buenos Aires";
                    }
                    else {
                        $mensaje = "$nombre ha comprado $n_billetes para Buenos Aires. Para este vuelo quedan $restantes1";
                    }
                }
                elseif ($destino == "NY") {
                    $restantes2-=$n_billetes;
                    if ($n_billetes >= $restantes2) {
                        $mensaje = "No quedan asientos para Nueva York";
                    }
                    else {
                        $mensaje = "$nombre ha comprado $n_billetes para Nueva York. Para este vuelo quedan $restantes2";
                    }
                }
                elseif ($destino == "LA") {
                    $restantes3-=$n_billetes;
                    if ($n_billetes >= $restantes3) {
                        $mensaje = "No quedan asientos para Los Ángeles";
                    }
                    else {
                        $mensaje = "$nombre ha comprado $n_billetes para Los Ángeles. Para este vuelo quedan $restantes3";
                    }
                }
            }
            else {
                echo "Alguno de los campos es erroneo";
            }
    
        }
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
    <form method="post">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Destino:
            <select name="destino" required>
                <?php 
                    if ($restantes1 > 0) {
                        echo "<option value='BBAA'>Buenos Aires</option>";
                    }
                    if ($restantes2 > 0) {
                        echo "<option value='NY'>Nueva York</option>";
                    }
                    if ($restantes3 > 0) {
                        echo "<option value='LA'>Los Ángeles</option>";
                    }
                ?>
            </select>
        </label><br>
        <input type="hidden" name="oculto_BBAA" value="<?php echo $restantes1; ?>">
        <input type="hidden" name="oculto_NY" value="<?php echo $restantes2; ?>">
        <input type="hidden" name="oculto_LA" value="<?php echo $restantes3; ?>">
        <label>Num. de billetes que se quieren reservar: <input type="number" name="n_billetes" required></label><br>
        <label><input type="submit" value="enviar"></label>
    </form>
    <?php
        echo $mensaje;
    ?>
</body>
</html>