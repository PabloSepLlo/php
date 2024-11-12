<?php
    function vacio(){
        $parametros = func_get_args();
        $num_parametros = func_num_args();
        $validar_empty = false;
        for ($i = 0; $i < $num_parametros && !$validar_empty; $i++){
            if (empty($parametros[$i])){
                $validar_empty = true;
            }
        }
        return $validar_empty;
    }
?>
