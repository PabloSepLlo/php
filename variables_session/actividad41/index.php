<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action="./establecerPreferencia.php" method="POST">
			Seleccione idioma:<select name="idioma">
				<option value="en">Ingles</option>
				<option value="es">Espa&ntilde;ol</option>
				</select><br/>
				Seleccione tema:<select name="tema">
				<option value="claro">Claro</option>
				<option value="oscuro">Oscuro</option>
				</select>
				<input type="submit" value="Establecer"/>
		</form>
		<a href="./restoPaginas.php">Ir al sitio</a>
		<?php
			if(isset($_SESSION["msg"])){
				echo "<p>".$_SESSION["msg"]."</p>";
				unset($_SESSION["msg"]);
			}
		?>
		</body>
</html>