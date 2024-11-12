<?php
    $page = "Inicio";
    switch ($page) {
        case "Inicio":
            echo "Has seleccionado la pagina de inicio";
            break;
        case "Sobre nosotros":
            echo "Has seleccionado sobre nosotros";
            break;
        case "Noticias":
            echo "Has seleccionado noticias";
            break;
        case "Acceso identificado":
            echo "Ha seleccionado acceso identificado";
            break;
        case "Enlaces":
            echo "Ha seleccionado enlaces";
            break;
        default:
            echo "No ha sido posible reconocer la seleccion";
            break;
    }
?>