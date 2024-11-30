<?php
    function autenticar($usuario, $contrasena) {
        $autenticado = false;
        if (isset($_COOKIE["usuarios"])) {
            $lista_usuarios = unserialize($_COOKIE["usuarios"]);
            for ($i = 0; $i < count($lista_usuarios) && !$autenticado; $i++) {
                if ($lista_usuarios[$i][0] == $usuario && $lista_usuarios[$i][1] == $contrasena) {
                    $autenticado = true;
                }
            }
        }
        return $autenticado;
    }
    function existe_usuario($user_name){
        $error = false;
        $usuarios = unserialize($_COOKIE["usuarios"]);
            for ($i = 0; $i < count($usuarios); $i++) {
                if ($usuarios[$i][0] == $user_name) {
                    $error = true;
                }
            }
        return $error;
    }
    function registrar($user_name, $nombre, $apellidos, $user_pass) {
        $registrado = false;
        if (!isset($_COOKIE["usuarios"])) {
            $usuarios = [];
            $usuario = [$user_name, $user_pass, $nombre, $apellidos];
            $usuarios[] = $usuario;
            setcookie("usuarios", serialize($usuarios), time()+(60*60*24*30), "/");
            $registrado = true;
        }
        else {
            $usuarios = unserialize($_COOKIE["usuarios"]);
            if (!existe_usuario($user_name)){
                $usuarios[] = [$user_name, $user_pass, $nombre, $apellidos];
                setcookie("usuarios", serialize($usuarios), time()+(60*60*24*30), "/");
                $registrado = true;
            }            
        }
        return $registrado; 
    }
?>
