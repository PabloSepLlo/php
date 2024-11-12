<html>
    <head></head>
    <body>
    <h1>Actividad 7</h1>
    <?php
        $cadena = "Ana,30,Juan,25,Maria,35,Pedro,28";
        $array = explode(",", $cadena);
        echo "
        <table border = 1px>
            <tr>
                <td>Nombre</td>
                <td>Edad</td>
            </tr>
            <tr>
                <td>$array[0]</td>
                <td>$array[1]</td>
            </tr>
            <tr>
                <td>$array[2]</td>
                <td>$array[3]</td>
            </tr>
            <tr>
                <td>$array[4]</td>
                <td>$array[5]</td>
            </tr>
            <tr>
                <td>$array[6]</td>
                <td>$array[7]</td>
            </tr>
        </table><br>";
        echo "La media de las edades es ".($array[1]+$array[3]+$array[5]+$array[7])/4;
    ?>
    </body>
</html>