<?php
if(
	!empty($_POST['nome']) &&
	!empty($_POST['email']) &&
	!empty($_POST['senha']) &&
	$_POST['senha']==$_POST['senha2'] &&
	strlen($_POST['senha'])>=4
){
	require 'conexao.php';
	require 'servico.php';
	$conexao=new conexao();
	$servico=new servico($conexao);
	$senhaCripto=password_hash($_POST['senha'], PASSWORD_DEFAULT);
	$servico->novoUsuario($_POST['nome'],$_POST['email'],$senhaCripto);
	$servico=new servico($conexao);
	$usuario=$servico->recuperarUsuario($_POST['email']);
	if(sizeof($usuario)>0){
		session_start();
		$_SESSION['userid']=$usuario[0][0];
		$_SESSION['autenticado'] = 'S';
		header('Location: ../produtos/index.php');
	}else{  
		header('Location: login/novo-usuario.php?new=erro');
	}
}else{  
    header('Location: login/novo-usuario.php?new=erro');
}
?>