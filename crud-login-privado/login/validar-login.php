<?php

require 'conexao.php';
require 'servico.php';
$conexao=new conexao();
$servico=new servico($conexao);
$usuariosApp=$servico->recuperarUsuarios();

$usuarioAutenticado = false;
for($i = 0; $i < sizeof($usuariosApp); $i++){
    if(
		$usuariosApp[$i][2] == $_POST['email'] && 
		password_verify($_POST['senha'],$usuariosApp[$i][3]))
	{
        $usuarioAutenticado = true;
		$id=$usuariosApp[$i][0];
    }
}

if($usuarioAutenticado){
	session_start();
	$_SESSION['userid']=$id;
    $_SESSION['autenticado'] = 'S';
	header('Location: ../produtos/index.php');
}else{  
    header('Location: login.php?login=erro');
}

?>