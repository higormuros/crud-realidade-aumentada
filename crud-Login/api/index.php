<?php
//end point da API
if(isset($_REQUEST['produto'])){
    if(is_numeric($_REQUEST['produto'])){
        require_once "../../../crud-login-privado/api/carregar-produto.php";
        if(!isset($acao) || $acao!=="verProduto"){
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