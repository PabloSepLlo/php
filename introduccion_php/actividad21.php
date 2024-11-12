<html>
    <head></head>
    <body>
        <?php
            echo"<form><label>Día: <select name='dia'>";
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value='dia'>$i</option>";
            }
            echo "</select></label>";
            echo"<label>Mes: <select name='mes'>";
            for ($a = 1; $a <= 12; $a++) {
                echo "<option value='mes'>$a</option>";
            }
            echo "</select></label>";
            echo"<label>Año: <select name='anio'>";
            for ($b = 2024; $b >= 1900; $b--) {
                echo "<option value='anio'>$b</option>";
            }
            echo "</select></label></form>";
        ?>
    </body>
</html>