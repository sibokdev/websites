<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['ecorreo']) &&
    !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['ecorreo'];
        $mensaje = $_POST['mensaje'];

        $header ="From: noreply@example.com" . " \r\n";
        $header .= "Reply-To: noreply@example.com". "\r\n";
$header .= "X-Mailer: PHP/" . phpversion();
$correo = @mail($ecorreo,$mensaje,$apellidos,$nombre);
if($mail){
    echo "<h4>!Mail enviado</h4>";
}

$header .= "Mime_Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
    }
}





$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $correo . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'neil.tapia11@gmail.com';
$asunto = 'Mensaje de cambiosypermutas.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>