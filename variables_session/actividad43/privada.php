<?php
	session_start();
    if (isset($_POST["cerrar"])){
        header("Location: ./index.php");
        exit(); 
    }
	if(!isset($_SESSION["autenticado"])){
		$_SESSION["error"]="Operacion no permitida";
		header("Location: ./index.php");
	}
	else{
		$tiempo=$_SESSION["tiempo"] + 60;
		$tiempoActual=time();
		if($tiempo<=$tiempoActual){
			session_destroy();
			session_start();
			$_SESSION["error"]="Tiempo expirado";
			header("Location: ./index.php");
		}
		else{
			$_SESSION["tiempo"]=time();
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Actividad 39 - Pagina Privada</title>
	</head>
	<body>
		<p>Estas en una página de administrador</p>
		<a href="">Recargar pagina</a>
        <form method="post">
            <input type="submit" name="cerrar" value="Cerrar sesion">
        </form>
	</body>
</html>