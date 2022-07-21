<?php
if(
!empty($_POST['nome']) &&
!empty($_POST['email'])
){
require 'conexao.php';
require 'servico.php';
$conexao=new conexao();
$servico=new servico($conexao);
$servico->mudarUsuario($_POST['nome'],$_POST['email'],$_POST['id']);
header('Location: conta.php?success=y');
}else{  
    header('Location: novo-usuario.php?success=f');
}

?>