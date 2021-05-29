<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$msj = $_POST['msj'];
		
	// armo y mando mail
	$fecha = date("d-m-Y H:i");
	$mymail = "info@residenciaciudadela.org.ar";
	$subject = "Desde www.residenciaciudadela.org.ar - CONTACTO";
	$contenido .= "Datos: \n";
	$contenido .= " - Nombre: ".$nombre." \n";
	$contenido .= " - E-mail: ".$mail."\n";
	$contenido .= " - Mensaje: ".$msj."\n\n";

	$contenido .= "el mensaje se escribio el ".$fecha;

	$header = "From:".$mail."\nReply-To:".$mail."\n";

	$header .= "X-Mailer:PHP/".phpversion()."\n";

	$header .= "Mime-Version: 1.0\n";

	$header .= "Content-Type: text/plain";
	
	mail($mymail, $subject, utf8_decode($contenido) ,$header);

	echo "ok";
?>
