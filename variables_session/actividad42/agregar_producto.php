<?php
    session_start();
    $producto = [];
    if (isset($_POST["id"], $_POST["nombre"], $_POST["precio"], $_POST["cant"])) {
        if (!isset($_COOKIE["carrito"])) {
            if ($_POST["cant"] > 0) {
                $carrito = [];
                $producto = [$_POST["id"], $_POST["nombre"], $_POST["precio"], $_POST["cant"]];
                $carrito[] = $producto;
                setcookie("carrito", serialize($carrito), time()+(60*60*24*30), "/");
            }
            else {
                $_SESSION["msg"]="La cantidad al añadir por primera vez un producto no puede ser negativa";
                header("Location: ./index.php");
                exit();
            }
        }
        else {
            $carrito_ini = unserialize($_COOKIE["carrito"]);
            $existe_producto = false;
            $carrito_definitivo = [];
            for ($i = 0; $i < count($carrito_ini); $i++) {
                if ($carrito_ini[$i][0] == $_POST["id"]) {
                    $existe_producto = true;
                    $carrito_ini[$i][3] += $_POST["cant"];
                }
                if ($carrito_ini[$i][3] > 0) {
                    $carrito_definitivo[] = $carrito_ini[$i];
                }
            }
            if (!$existe_producto) {
                if ($_POST["cant"] > 0) {
                    $producto = [$_POST["id"], $_POST["nombre"], $_POST["precio"], $_POST["cant"]];
                    $carrito_ini[] = $producto;
                    setcookie("carrito", serialize($carrito_ini), time()+(60*60*24*30), "/");
                }
                else {
                    $_SESSION["msg"]="La cantidad al añadir por primera vez un producto no puede ser negativa";
                    header("Location: ./index.php");
                    exit();
                }
            }
            else {
                setcookie("carrito", serialize($carrito_definitivo), time()+(60*60*24*30), "/");
            }            
        } 
              
    }
    header("Location: ./index.php");
    exit(); 
?>