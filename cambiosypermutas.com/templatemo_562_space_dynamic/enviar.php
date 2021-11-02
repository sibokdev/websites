<?php

$nombre = $_POST['nombre'];
$mail = $_POST['apellidos'];
$correo = $_POST['ecorreo'];
$empresa = $_POST['mensaje'];

$header ='From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime_Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $correo . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'neil.tapia11@gmail.com';
$asunto = 'Asunto del mil recibido';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>