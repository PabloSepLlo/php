<?php
    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $n_hijos = $_POST["n_hijos"];
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($nombre, $sexo, $n_hijos) && !empty($nombre) && !empty($sexo) && is_numeric($n_hijos)){
            if ($n_hijos >= 1) {
                if ($sexo == "femenino" && $n_hijos < 2) {
                    echo "La señora $nombre tiene $n_hijos hijo";
                }
                elseif ($sexo == "femenino" && $n_hijos > 1) {
                    echo "La señora $nombre tiene $n_hijos hijos";
                } 
                elseif ($sexo == "masculino" && $n_hijos > 1) {
                    echo "El señor $nombre tiene $n_hijos hijos";
                } 
                else {
                    echo "El señor $nombre tiene $n_hijos hijo";
                }
            }
            else {
                echo "$nombre no tiene hijos";
            }
        }
        else {
            echo "Alguno de los campos está vacío";
        }

    }
?>