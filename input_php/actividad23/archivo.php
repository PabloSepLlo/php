<!DOCTYPE html>
    <head></head>
    <body>
        <?php
            if (isset($_GET["nombre"], $_GET["tlf"], $_GET["mail"], $_GET["msg"])){
                if (empty($_GET["nombre"]) || empty($_GET["tlf"]) || empty($_GET["mail"]) || empty($_GET["msg"])){
                    echo "Alguna de las variables está vacia";
                    echo "<a href='./index.php'>Volver</a>";//me lo devuelve no relleno porque si falta alguna variable petaría el autorrelleno
                }
                else {
                    $nombre = $_GET["nombre"];
                    $telefono = $_GET["tlf"];
                    $mail = $_GET["mail"];
                    $mensaje = $_GET["msg"];
                    echo "Hola $nombre<br>Te voy a enviar spam a $mail y te llamare de madrugada a $telefono.<br>$mensaje<br>Enviado desde IPHONE<br>";
                    echo "<a href='./index.php?nombre=$nombre&tlf=$telefono&mail=$mail&msg=$mensaje'>Volver</a>";
                    //si estan todas si puedo autorrellenar
                }
            }
            else {
                echo "Alguna de las variables no está definida";
            }
        ?>
    </body>
</html>
