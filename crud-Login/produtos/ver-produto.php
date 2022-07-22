<!doctype html>
<?php
session_start();
if(!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']=='S'){
	header('Location: login.php?login=erro2');
}else{
    $acao="verProduto";
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
        <a-scene>
            <a-assets>
                <a-asset-item id="produto" src="../imagens/<?php echo $produto[0]["arquivo"];?>"></a-asset-item>
            </a-assets>

            <a-entity 
                gltf-model="#produto" 
                id="produto"
                position="0 1 -1"
            ></a-entity>
        </a-scene>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
        crossorigin="anonymous"></script>
    </body>
</html>