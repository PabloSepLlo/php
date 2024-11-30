<?php
session_start();
setcookie("idioma","a",time()-2,"/");
setcookie("tema","v",time()-2,"/");
$_SESSION["msg"]="Cookies eliminadas";
header("Location: ./index.php");
exit();
?>