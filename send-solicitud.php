<?php
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$dir = $_POST['dir'];
	$ciudad = $_POST['ciudad'];
	$pais = $_POST['pais'];
	$tel = $_POST['tel'];
	$nac = $_POST['nac'];
	$col = $_POST['col'];
	$carrera = $_POST['carrera'];
	$anio = $_POST['anio'];
	$uni = $_POST['uni'];
	$activ = $_POST['activ'];
	$otros = $_POST['otros'];							
	$conocio = $_POST['conocio'];
	$espera = $_POST['espera'];
	$nombreF = $_POST['nombreF'];
	$dirF = $_POST['dirF'];
	$ciudadF = $_POST['ciudadF'];
	$telF = $_POST['telF'];

		
	// armo y mando mail
	$fecha = date("d-m-Y H:i");
	$mymail = "info@residenciaciudadela.org.ar";
	$subject = "Desde www.residenciaciudadela.org.ar - SOLICITUD DE INGRESO";
	$contenido .= "Datos: \n";
	$contenido .= " - Nombre: ".$nombre." \n";
	$contenido .= " - E-mail: ".$mail."\n";
	$contenido .= " - Direccion: ".$dir."\n";
	$contenido .= " - Telefono: ".$tel."\n";
	$contenido .= " - Pais: ". $pais ." - Ciudad: ".$ciudad."\n";
	$contenido .= " - Nacionalidad: ".$nac."\n";
	$contenido .= " - Colegio Secundario y titulo obtenido: ".$col."\n";
	$contenido .= " - Carrera elegida: ".$carrera."\n";
	$contenido .= " - Solicitud para el año: ".$anio."\n";
	$contenido .= " - Universidad: ".$uni."\n";
	$contenido .= " - Actividades de interes: ".$activ."\n";
	$contenido .= " - Otros estudios: ".$otros."\n\n";
	$contenido .= " - Como conoció la residencia? ".$conocio."\n";
	$contenido .= " - Que espera de la residencia? ".$espera."\n\n";
	$contenido .= " DATOS DE FAMILIAR O CONOCIDO EN BUENOS AIRES \n\n";
	$contenido .= " - Nombre: ".$nombreF."\n";
	$contenido .= " - Direccion: ".$dirF."\n";
	$contenido .= " - Ciudad: ".$ciudadF."\n";
	$contenido .= " - Telefono: ".$telF."\n";

	$contenido .= "el mensaje se escribio el ".$fecha;

	$header = "From:".$mail."\nReply-To:".$mail."\n";

	$header .= "X-Mailer:PHP/".phpversion()."\n";

	$header .= "Mime-Version: 1.0\n";

	$header .= "Content-Type: text/plain";
	
	mail($mymail, $subject, utf8_decode($contenido) ,$header);

	echo "ok";
?>
