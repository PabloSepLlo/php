<?php
session_start();
if(!isset($_POST["usuario"],$_POST["pass"]) || empty($_POST["usuario"]) || empty($_POST["pass"])){
	$_SESSION["error"]="Rellena todos los campos";
	header("Location: ./index.php");
}
else{
	$usuario="admin";
	$pass="1234";
	if($_POST["usuario"]==$usuario && $_POST["pass"]==$pass){
		$_SESSION["autenticado"]=true;
		$_SESSION["tiempo"]=time();
		header("Location: ./privada.php");
	}
	else{
		$_SESSION["error"]="Credenciales incorrectas";
		header("Location: ./index.php");
	}
}
?>