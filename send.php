<?php
	$nombre=$_POST['nombre'];
	$mail=$_POST['mail'];
	$detalle=$_POST['detalle'];
	$para= 'guadalupe.evequoz@gmail.com';
	$asunto= 'formulario';
	$mensaje= "Nombre=". $nombre. "Mail=". $mail. "Detalle=". $detalle.;
	mail($para, $asunto, utf8_decode($mensaje), $header);
	echo 'mensaje enviado correctamente';
?>