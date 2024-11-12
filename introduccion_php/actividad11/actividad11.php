<?php
    $imagenes = [1,2,3,4,5,6,7];
    shuffle($imagenes);
    echo "<img src='./img/$imagenes[0].png'/>";
?>