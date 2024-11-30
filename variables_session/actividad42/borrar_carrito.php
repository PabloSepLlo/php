<?php
session_start();
setcookie("carrito","v",time()-2,"/");
$_SESSION["msg"]="Carrito eliminado";
header("Location: ./index.php");
exit();
?>
