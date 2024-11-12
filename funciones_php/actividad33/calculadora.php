<?php 
    function calculadora(){
        $parametros = func_get_args();
        $num_parametros = func_num_args();
        $funciona = false;
        if ($num_parametros > 2) {
            $operacion = $parametros[0];
            $resultado = $parametros[1];
            switch($operacion) {
                case "Suma":
                    for ($i = 2; $i < $num_parametros; $i++) {
                        $resultado += $parametros[$i];
                    }
                    break;
                case "Resta":
                    for ($i = 2; $i < $num_parametros; $i++) {
                        $resultado -= $parametros[$i];
                    }
                    break;
                case "Multiplicacion":
                    for ($i = 2; $i < $num_parametros; $i++) {
                        $resultado *= $parametros[$i];
                    }
                    break;
                case "Division":
                    for ($i = 1; $i < $num_parametros; $i++) {
                        if ($parametros[$i] != 0){
                            $resultado /= $parametros[$i];
                        }
                        else{
                            echo "Indeterminacion";
                            return;
                        }
                    }
                    break;
                default:
                echo "Operacion no valida";
                return;
            }
        }
        else {
            echo "No es viable la operacion";
            return;
        }

        return $resultado; 
    }

    echo calculadora("Division", 5, 2, 4);
?>