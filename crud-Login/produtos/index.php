<!doctype html>
<?php
session_start();
if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']=='S'){
	header('Location: login.php?login=erro2');
}else{
    $acao="listarProdutos";
    require_once "../api/index.php";
}
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="noindex">
		<meta name="author" content="Higor Muros">
		<meta name="description" content="Pagina inicial">
		<meta name="keywords" content="pagina inicial">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" 
		crossorigin="anonymous">
		
		<title>Página Inicial</title>
        <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
  </head>

  <body class="bg-light">
  <nav class='navbar navbar-expand-lg navbar-dark bg-primary'>
  <div class='container'>
	<div class='d-inline-block align-text-top navbar-brand'>Super Sistema</div>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNav'>
      <ul class='navbar-nav ms-auto'>
        <li class='nav-item'>
          <a href="../login/conta.php" class='nav-link active'>Minha conta</a>
        </li>
        <li class='nav-item'>
          <a href="../login/logout.php" class='nav-link active'>Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<div class="container pt-5">
       <?php
            foreach($produtos as $produto){?>
                <div class="bg-white p-3 mb-3">
                    <a href="ver-produto.php?produto=<?php echo $produto["idmodel"]; ?>" class="link-dark" target="_blank"><?php echo $produto["nome"]; ?></a>
                </div>
            <?php }
       ?>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
	crossorigin="anonymous"></script>
  </body>
</html>