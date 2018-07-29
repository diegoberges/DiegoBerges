<?php 
	$mensaje="";
	$mensaje.="Contacto:". "\n\n";
	$mensaje.="Nombre y Apellidos: ".$_POST['name']."\n";
	$mensaje.="E-mail: ".$_POST['email']."\n";
	$mensaje.="Mensaje: ".$_POST['text']."\n";
	// definimos a quien se lo enviamos
	$email_destiny="dbzuera@gmail.com";
	$subject="Mensaje de Contacto de DiegoBerges.com";
?>