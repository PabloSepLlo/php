<?php
session_start();
if(isset($_POST["idioma"], $_POST["tema"])){
	setcookie("idioma",$_POST["idioma"],time()+(60*60*24*30),"/");
	setcookie("tema",$_POST["tema"],time()+(60*60*24*30),"/");
}
$_SESSION["msg"]="Idioma establecido a ".$_POST["idioma"];
$_SESSION["msg"].=" y tema establecido a ".$_POST["tema"];
header("Location: ./index.php");
exit();
?>