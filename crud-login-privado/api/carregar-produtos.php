<?php

require '../../../crud-login-privado/login/conexao.php';
require '../../../crud-login-privado/login/servico.php';
$conexao=new conexao();
$servico=new servico($conexao);
$produtos=$servico->recuperarProdutos();
?>