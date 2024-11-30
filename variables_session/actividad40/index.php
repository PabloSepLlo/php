<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Actividad 40</title>
	</head>
	<body>
		<form method="POST" action="./autenticar.php">
			Usuario:<input type="text" name="usuario"/>
			Contrase&ntilde;a:<input type="password" name="pass"/>
			<input type="submit" value="Enviar"/>
		</form>
		<?php
			if(isset($_SESSION["error"])){
				echo "<p style='color:red;'>".$_SESSION["error"]."</p>";
				unset($_SESSION["error"]);
			}
		?>
	</body>
</html>