<?php 
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numeros_op"])){
            $numeros = $_POST["numeros"];
        }
    }
    function calculadora(){
        $parametros = func_get_args();
        $num_parametros = func_num_args();
        $operacion = $parametros[0];
        if ($operacion == "Suma" || $operacion == "Resta"){
            $resultado = 0;
        }
        else {
            $resultado = 1;
        }    
        if ($num_parametros > 2) {
            switch($operacion) {
                case "Suma":
                    for ($i = 1; $i < $num_parametros; $i++) {
                        $resultado += $parametros[$i];
                    }
                    break;
                case "Resta":
                    for ($i = 1; $i < $num_parametros; $i++) {
                        $resultado -= $parametros[$i];
                    }
                    break;
                case "Multiplicacion":
                    for ($i = 1; $i < $num_parametros; $i++) {
                        $resultado *= $parametros[$i];
                    }
                    break;
                case "Division":
                    $invalida = false;
                    for ($i = 1; $i < $num_parametros || $invalida; $i++) {
                        if ($parametros[$i] != 0){
                            $resultado /= $parametros[$i];
                        }
                        else{
                            $invalida = true;
                            $resultado = "Indeterminacion;"
                        }
                            
                    }
                    break;
                default:
                $resultado = "Operacion no valida";
            }
        }
        else {
            $resultado = "No es viable la operacion";
        }
        return $resultado;       
        
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
        <?php
            for ($i = 0; $i < $numeros; $i++){
                echo "Numero $i: <input type='number' name='n$i'>"
            }
        ?>
        Operacion: <select name="oper">
            <option value="Suma">Sumar</option>
            <option value="Resta">Resta</option>
            <option value="Multiplicacion">Multiplicacion</option>
            <option value="Division">Division</option>
        </select><br/>
        <input type="submit" value="Operar">
    </form>
    <?php
        if (isset($_POST["oper"])){
            echo calculadora($_POST["oper"], $_POST["n1"], $_POST["n2"]);
        }
    ?>
</body>
</html>