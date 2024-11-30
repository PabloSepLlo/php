<?php
	session_start();
	if(!isset($_SESSION["autenticado"])){
		$_SESSION["error"]="Operacion no permitida";
		header("Location: ./index.php");
	}
	else{
		//120=2*60segundos=2minutos
		$tiempo=$_SESSION["tiempo"]+5;
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
	</body>
</html>