<?php 
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	echo "<script>alert('Enviado, muchas gracias $nombre, nos pondremos en contacto');javascript:history.back(-1);</script> ";
	if(mail('ventas@idecsoluciones.com', $asunto, $mensaje)){
			
	}else{
		echo "<script>alert('No se ha podido enviar, revisa tus datos $nombre por favor');</script>";
	}
 ?>