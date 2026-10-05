<?php

    $nomeP = $_POST["nomeP"];
        $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $qtdEstoque = $_POST["qtdEstoque"];
    $nomeF = $_POST["nomeF"];
    $pais = $_POST["pais"];

    $novoProduto = [
        
        "nome" => $nomeP,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "qtdEstoque" => $qtdEstoque,
        
        "Fabricante" => [
            "nomeF" => $nomeF,
            "pais" => $pais,
        ],
    ];

    $conteudoJson = file_get_contents(__DIR__."/dados/cadastroProdutos.json");
    $produtos = json_decode($conteudoJson, true);
    $produtos[] = $novoProduto;
    
    $jsonAtualizado = json_encode(
        $produtos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__. "/dados/cadastroProdutos.json", $jsonAtualizado);
    $conteudoJson = file_get_contents(__DIR__. "/dados/intro.json");
    $alunos = json_decode($conteudoJson, true);



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="cadastroProdutos.css">
</head>



<body>
    <form method="POST">

    <h1>CADASTRO DE PRODUTOS</h1>
    
    
    <br><h2>INSIRA AS CARACTERÍSTICAS DO FABRICANTE: </h2><br>

    <p>Nome da fabricante: 
        <input type="text" name="nomeF"> 
    </p>
    
    <p>País de Origem 
        <input type="text" name="pais"> 
    </p>
    
    <br><h2>INSIRA AS CARACTERÍSTICAS DO PRODUTO: </h2><br>
     
    <p>Nome do produto: 
        <input type="text" name="nomeP"> 
    </p>

    <p>Marca: 
        <input type="text" name="marca"> 
    </p>

    <p>Preço: 
        <input type="number" name="preco"  min="0" step="0.01" required> 
    </p>

    <p>Quantidade em estoque: 
        <input type="number" name="qtdEstoque" min="0" required> 
    </p>
    
    <button type="submit">ENVIAR</button>

   
   
   
   
   
   
   
   
   
   
   
   
   
    </form>
</body>
</html>