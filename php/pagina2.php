<?php 
	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	echo "<script>alert('Enviado, Gracias');javascript:history.back(-1);</script>";
	if(mail('ventas@idecsoluciones.com', $asunto, $mensaje)){
			
	}else{
		echo "<script>alert('No se ha podido enviar, revisa tus datos');javascript:history.back(-1);</script>";
	}
 ?>