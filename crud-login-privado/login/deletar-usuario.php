<?php
session_start();
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'S'){
	header('Location: login.php?login=erro2');
} else{
	require 'conexao.php';
	require 'servico.php';
	$conexao=new conexao();
	$servico=new servico($conexao);
	$servico->deletarUsuario($_SESSION['userid']);
	header('Location: novo-usuario.php?del=y');
}


?>