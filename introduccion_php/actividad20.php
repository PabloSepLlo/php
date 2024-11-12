<?php
    $mi_cartelera = ['Sharknado 5, Aletamiento Global', 'Flubber', 'Alien Covenant', 'Constantine', 'El imperio contraataca', 'Spy kids'];
    foreach($mi_cartelera as $pelicula) {
        echo "Pelicula: $pelicula<br>";
    }
    echo "<table style='border: 1px solid black'><tr><th>Peliculas FAV</th></tr>";
    foreach($mi_cartelera as $pelicula) {
        $color1 = random_int(0,255);
        $color2 = random_int(0,255);
        $color3 = random_int(0,255);
        echo "<tr><td style = 'background-color: rgb($color1, $color2, $color3); border: 1px solid black; text-align: center'>$pelicula</td></tr>";
    }
    echo "</table>";
?>