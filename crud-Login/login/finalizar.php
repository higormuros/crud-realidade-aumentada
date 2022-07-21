<?php
	session_start();
	if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S'){
		header('Location: login.php?login=erro2');
	} else{
		require_once "../../../crud-login-privado/login/deletar-usuario.php";
	}

?>