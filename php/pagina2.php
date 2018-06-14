<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	
	if(mail('ventas@idecsoluciones', $email, $message)){
		echo "<script>alert('Enviado, muchas gracias $name, nos pondremos en contacto');javascript:history.back(-1);</script> ";	
	}else{
		echo "<script>alert('No se ha podido enviar, revisa tus datos $name por favor');</script>";
	}
 ?>
 