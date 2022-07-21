<?php

require 'conexao.php';
require 'servico.php';
$conexao=new conexao();
$servico=new servico($conexao);
$usuario=$servico->carregarUsuario($_SESSION['userid']);


?>