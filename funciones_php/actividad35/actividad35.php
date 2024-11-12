<?php
    function validar_input($dato){
        $dato = trim($dato);
        $dato = stripcslashes($dato);
        $dato = htmlspecialchars($dato);
        return $dato;
    }
    $cadena = "<?php echo 'Hackeado'; ?>";
    $cadena_segura = validar_input($cadena);
    echo $cadena_segura;
?>