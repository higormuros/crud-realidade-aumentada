<?php
//end point da API
if(isset($_GET['produto'])){
    if(is_numeric($_GET['produto'])){
        if(isset($acao) && $acao=="verProduto"){
            require_once "../../../crud-login-privado/api/carregar-produto.php";
        } else{
            require_once "../../../crud-login-privado/api/carregar-produto.php";
            echo str_replace("\/","/",json_encode(
                array(
                    "id"=>$produto[0]["idmodel"],
                    "nome"=>$produto[0]["nome"],
                    "arquivo"=>"dominio/imagens/".$produto[0]["arquivo"]
                )
            ));
           
        }
    } else{
        echo "O ID do produto precisa ser numerico";
    }
} else if(isset($acao) && $acao=="listarProdutos"){
    require_once "../../../crud-login-privado/api/carregar-produtos.php";
}  else{
    echo "erro de acao desconhecida";
}

function produto_json($produto){
    return response()->json_encode(
        array(
            "id"=>$produto[0]["idmodel"],
            "nome"=>$produto[0]["nome"],
            "arquivo"=>"dominio/imagens/".$produto[0]["arquivo"]
        )
    );
}

?>