<?php
session_start();
if(!isset($_POST["usuario"],$_POST["pass"]) || empty($_POST["usuario"]) || empty($_POST["pass"])){
	$_SESSION["error"]="Rellena todos los campos";
	header("Location: ./index.php");
}
else{
	$usu_ad="admin";
	$pass_ad="1234";
	$usu_ed="editor";
	$pass_ed="5678";
	$usu_us="usu";
	$pass_us="0000";
    $_SESSION["aut_ad"] = false;
    $_SESSION["aut_ed"] = false;
    $_SESSION["aut_us"] = false;
	if($_POST["usuario"]==$usu_ad && $_POST["pass"]==$pass_ad){
		$_SESSION["aut_ad"]=true;
        header("Location: ./menu.php");
		die();
	}
	else if($_POST["usuario"]==$usu_ed && $_POST["pass"]==$pass_ed){
		$_SESSION["aut_ed"]=true;
        header("Location: ./menu.php");
		die();
	}
	else if($_POST["usuario"]==$usu_us && $_POST["pass"]==$pass_us){
		$_SESSION["aut_us"]=true;
        header("Location: ./menu.php");
		die();
	}
	else{
		$_SESSION["error"]="Credenciales incorrectas";
		header("Location: ./index.php");
		die();
	}
}
?>