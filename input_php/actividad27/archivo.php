<?php
    $nombre = $_POST["nombre"];
    $destino = $_POST["destino"];
    $n_billetes = $_POST["n_billetes"];
    $oculto_BBAA = $_POST["oculto_BBAA"];
    $oculto_NY = $_POST["oculto_NY"];
    $oculto_LA = $_POST["oculto_LA"];

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($nombre, $destino, $n_billetes) && !empty($nombre) && !empty($destino) && is_numeric($n_billetes)){
            if ($destino == "BBAA") {
                $oculto_BBAA-=$n_billetes;
                if ($oculto_BBAA < 0) {
                    echo "No quedan asientos para Buenos Aires";
                }
                else {
                    echo "$nombre ha comprado $n_billetes para Buenos Aires. Para este vuelo quedan $oculto_BBAA";
                }
            }
            elseif ($destino == "NY") {
                $oculto_NY-=$n_billetes;
                if ($oculto_NY < 0) {
                    echo "No quedan asientos para Nueva York";
                }
                else {
                    echo "$nombre ha comprado $n_billetes para Nueva York. Para este vuelo quedan $oculto_NY";
                }
            }
            elseif ($destino == "LA") {
                $oculto_LA-=$n_billetes;
                if ($oculto_LA < 0) {
                    echo "No quedan asientos para Nueva York";
                }
                else {
                    echo "$nombre ha comprado $n_billetes para Los Ángeles. Para este vuelo quedan $oculto_LA";
                }
            }
        }
        else {
            echo "Alguno de los campos está vacío";
        }

    }
?>