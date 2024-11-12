<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $num_caract = $_POST["caract"];
        $nivel_seg = $_POST["seguridad"];
        $minusculas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $mayusculas = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $numeros = [0, 1, 2, 3, 4, 5 ,6, 7, 8, 9];
        $especiales = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")"];
        $contrasena = "";
        if (isset($num_caract, $nivel_seg) && !empty($nivel_seg) && is_numeric($num_caract)){
            if ($nivel_seg == "bajo") {
                for ($i = 0; $i < $num_caract; $i++) {
                    shuffle($minusculas);
                    $contrasena .= $minusculas[0];
                }
            }
            if ($nivel_seg == "medio") {
                $contrasena_valida = false;
                $lista_moderada = array_merge($minusculas, $mayusculas, $numeros);
                while (!$contrasena_valida) {
                    for ($i = 0; $i < $num_caract; $i++) {
                        shuffle($lista_moderada);
                        $contrasena .= $lista_moderada[0];
                    }
                    $hay_minuscula = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_minuscula; $i++) {
                        for ($j = 0; $j < count($minusculas) && !$hay_minuscula; $j++) {
                            if ($contrasena[$i] == $minusculas[$j]){
                                $hay_minuscula = true;
                            }
                        }
                    }
                    $hay_mayuscula = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_mayuscula; $i++) {
                        for ($j = 0; $j < count($mayusculas) && !$hay_mayuscula; $j++) {
                            if ($contrasena[$i] == $mayusculas[$j]){
                                $hay_mayuscula = true;
                            }
                        }
                    }
                    $hay_numero = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_numero; $i++) {
                        for ($j = 0; $j < count($numeros) && !$hay_numero; $j++) {
                            if ($contrasena[$i] == $numeros[$j]){
                                $hay_numero = true;
                            }
                        }
                    }
                    if ($hay_minuscula && $hay_mayuscula && $hay_numero) {
                        $contrasena_valida = true;
                    }
                    else {
                        $contrasena = "";
                    }
                    
                }
                    
            }
            if ($nivel_seg == "alto") {
                $contrasena_valida = false;
                $lista_fuerte = array_merge($minusculas, $mayusculas, $numeros, $especiales);
                while (!$contrasena_valida) {
                    for ($i = 0; $i < $num_caract; $i++) {
                        shuffle($lista_fuerte);
                        $contrasena .= $lista_fuerte[0];
                    }
                    $hay_minuscula = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_minuscula; $i++) {
                        for ($j = 0; $j < count($minusculas) && !$hay_minuscula; $j++) {
                            if ($contrasena[$i] == $minusculas[$j]){
                                $hay_minuscula = true;
                            }
                        }
                    }
                    $hay_mayuscula = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_mayuscula; $i++) {
                        for ($j = 0; $j < count($mayusculas) && !$hay_mayuscula; $j++) {
                            if ($contrasena[$i] == $mayusculas[$j]){
                                $hay_mayuscula = true;
                            }
                        }
                    }
                    $hay_numero = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_numero; $i++) {
                        for ($j = 0; $j < count($numeros) && !$hay_numero; $j++) {
                            if ($contrasena[$i] == $numeros[$j]){
                                $hay_numero = true;
                            }
                        }
                    }
                    $hay_caracter = false;
                    for ($i = 0; $i < strlen($contrasena) && !$hay_caracter; $i++) {
                        for ($j = 0; $j < count($especiales) && !$hay_caracter; $j++) {
                            if ($contrasena[$i] == $especiales[$j]){
                                $hay_caracter = true;
                            }
                        }
                    }
                    if ($hay_minuscula && $hay_mayuscula && $hay_numero && $hay_caracter) {
                        $contrasena_valida = true;
                    }
                    else {
                        $contrasena = "";
                    }
                }
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
    <form method="POST">
        <label>Número de caracteres deseado: <input type="number" name="caract"></label>
        <label>Nivel de seguridad de contraseña: <select name="seguridad">
                <option value="bajo">Débil</option>
                <option value="medio">Moderada</option>
                <option value="alto">Fuerte</option>
            </select>
        </label>
        <label><input type="submit" value="Enviar"></label>
        <br>
        <?php 
        if (isset($contrasena)){
            echo $contrasena; 
        }
        ?>
    </form>
</body>
</html>