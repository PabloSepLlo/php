<?php
    function crear_tarea($titulo, $descripcion, $fecha, $hora, $estado, $nombre_usuario){
        $creada = false;
        if (!$_COOKIE["tareas"]) {
            $tareas = [];
            $tarea = [0, $titulo, $descripcion, $fecha, $hora, $estado, $nombre_usuario];
            $tareas[] = $tarea;
            setcookie("tareas", serialize($tareas), time()+(60*60*24*30), "/");
            $creada = true;
        }
        else {
            $tareas = unserialize($_COOKIE["tareas"]);
            $tarea = [count($tareas), $titulo, $descripcion, $fecha, $hora, $estado, $nombre_usuario];
            $tareas[] = $tarea;
            setcookie("tareas", serialize($tareas), time()+(60*60*24*30), "/");
            $creada = true;
        }
        return $creada;
    }
    function comprobar_tareas($user_name){
        $tiene_tareas = false;
        if (isset($_COOKIE["tareas"])) {
            $tareas = unserialize($_COOKIE["tareas"]);
            for ($i = 0; $i < count($tareas) && !$tiene_tareas; $i++) {
                if ($tareas[$i][6] == $user_name) {
                    $tiene_tareas = true;
                }
            }
        }
        return $tiene_tareas;
    }
    function determinar_tipo_vista($tiempo) {
        $lista_tareas = unserialize($_COOKIE["tareas"]);
        $resultado = [$tiempo, []];
        if ($tiempo == "Semanal") {
            $lunes = date("Y-m-d", strtotime("monday this week"));
            $domingo = date("Y-m-d", strtotime("sunday this week"));
            for ($i = 0; $i < count($lista_tareas); $i++) {
                if ($lista_tareas[$i][3] >= $lunes && $lista_tareas[$i][3] <= $domingo) {
                    $resultado[1][] = $lista_tareas[$i];
                }
            }
        }
        else if ($tiempo == "Diario") {
            $hoy = date("Y-m-d", strtotime("today"));
            $manana = date("Y-m-d", strtotime("tomorrow"));
            for ($i = 0; $i < count($lista_tareas); $i++) {
                if ($lista_tareas[$i][3] >= $hoy && $lista_tareas[$i][3] < $manana) {
                    $resultado[1][] = $lista_tareas[$i];
                }
            }
        }
        else if ($tiempo == "Mensual") {
            $primer_dia_mes = date("Y-m-d", strtotime("first day of this month"));
            $ultimo_dia_mes = date("Y-m-d", strtotime("last day of this month"));
            for ($i = 0; $i < count($lista_tareas); $i++) {
                if ($lista_tareas[$i][3] >= $primer_dia_mes && $lista_tareas[$i][3] <= $ultimo_dia_mes) {
                    $resultado[1][] = $lista_tareas[$i];
                }
            }
        }
        return $resultado;
    }
    function borrar_tareas_usuario($user_name){
        $lista_tareas = unserialize($_COOKIE["tareas"]);
        $tareas = [];
        for ($i = 0; $i < count($lista_tareas); $i++) {
            if ($lista_tareas[$i][6] != $user_name) {
                $tareas[] = $lista_tareas[$i];
            }
        }
        setcookie("tareas", serialize($tareas), time()+(60*60*24*30), "/");
    }
            
?>