<?php 
	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$message = $_POST['mensaje'];

	echo $nombre. "ha dicho <br/>".$mensaje;
	if(mail('csrivas24@gmail.com', $email, $message)){
		echo "mail enviado";
	}else{
		echo "uyuyuyuyuy";
	}
 ?>