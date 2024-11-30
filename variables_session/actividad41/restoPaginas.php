<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$color="white";//de serie es claro
			$letra="black";
			if(isset($_COOKIE["tema"])){
				if($_COOKIE["tema"]=="oscuro"){
					$color="black";
					$letra="white";
				}
				elseif($_COOKIE["tema"]=="claro"){
					$color="yellow";
					$letra="black";
				}
			}
			if(isset($_COOKIE["idioma"])){
				if($_COOKIE["idioma"]=="en"){
					echo "<p style='background-color:$color; color:$letra;'>Hello</p>";
				}
				else{
					echo "<p style='background-color:$color; color:$letra;'>Hola</p>";
				}
			}
			else{
				echo "<p style='background-color:$color; color:$letra;'>Hola</p>";
			}
		?>
		<a href="restablecerPreferencia.php">Restablecer preferencias</a>
	</body>
</html>