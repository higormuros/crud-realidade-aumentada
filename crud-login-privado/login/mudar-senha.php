<?php
if(
	!empty($_POST['novasenha']) &&
	$_POST['novasenha']==$_POST['novasenha2'] &&
	strlen($_POST['novasenha'])>=4
){
	require 'conexao.php';
	require 'servico.php';
	$conexao=new conexao();
	$servico=new servico($conexao);
	$senhaCripto=password_hash($_POST['novasenha'], PASSWORD_DEFAULT);
	$servico->mudarSenha($senhaCripto,$_POST['id2']);
	header('Location: conta.php?success=y');
}else{  
    header('Location: novo-usuario.php?success=f');
}
?>