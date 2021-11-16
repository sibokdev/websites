<?php

$nombre = $_POST['nombre'];
$mail = $_POST['apellidos'];
$correo = $_POST['ecorreo'];
$mensaje = $_POST['mensaje'];

$header ='From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime_Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $correo . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'ventas@web48.com.mx';
$asunto = 'Mensaje de cambiosypermutas.com';

mail($para, $asunto, utf8_decode($mensaje), $header);
if($correo){
    echo "<h4>Correo enviado!!</h4>";
    echo'<script type="text/javascript"> alert("Correo enviado exitosamente");
window.location.href="../index.php";</script>';
}

?>