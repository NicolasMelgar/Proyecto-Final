<?php   
$nombre = $_POST['nombre'];
$mail = $_POST['email']; 
$mensaje = $_POST['mensaje'];

// $header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su mail es " . $mail . "\r\n";
$mensaje .= "Su mensaje es " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'nicolasmelgarparadizo@gmail.com'; //el mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi Sitio Web'; //El asunto del mensaje que me llegará

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('Location: PAGES/exito.html'); 

?>