
<?php
error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];


$message = "se ha enviado correo";

$para = "aricervantes1297@gmail.com";
$asunto = "asunto del mensaje";

mail($para, $asunto, utf8_decode($message));

echo 'mensaje enviado correctamente';

?>
