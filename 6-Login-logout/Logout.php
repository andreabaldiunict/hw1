<?php
	//Avvia la sessione
	session_start();
	//Elimina la sessione
	session_destroy();
	//Vai al login
	header("Location: ../6-Login-logout/Login.php");
	exit;
?>