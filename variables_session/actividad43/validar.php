<?php
    session_start();
    if(!isset($_POST["user"],$_POST["pass"]) || empty($_POST["user"]) || empty($_POST["pass"])){
        $_SESSION["error"]="Rellena todos los campos";
        header("Location: ./index.php");
    }
    else {
        $usuario = "Admin";
        $password = 1234;
        if ($_SESSION["cont_fall"] < 5) {
            if ($_POST["user"] == $usuario && $_POST["pass"] == $password) {
                $_SESSION["autenticado"]=true;
                $_SESSION["tiempo"]=time();
                header("Location: ./privada.php");
            }
            else{
                $_SESSION["error"]="Credenciales incorrectas";
                if (!isset($_SESSION["cont_fall"])) {
                    $_SESSION["cont_fall"] = 1;
                }
                else {
                    $_SESSION["cont_fall"]++;
                }
                $_SESSION["error"]="Ha fallado la autenticacion ". $_SESSION["cont_fall"]. " veces";
                header("Location: ./index.php"); 
                exit();
            }
        }
        else {
            unset($_SESSION["cont_fall"]);
            setcookie("bloqueo","v",time()+10,"/");
            header("Location: ./index.php"); 
            exit();
        }            
    }
    
?>