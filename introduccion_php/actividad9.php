<?php
    $cadena = "<script>alert('¡Este es un ataque XSS!');</script>";
    //echo $cadena; Sale un mensaje en desplegable de aviso
    $cadena_literal = htmlspecialchars($cadena);
    echo "<h1>".$cadena_literal."</h1>";
?>