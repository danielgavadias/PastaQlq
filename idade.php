<?php 

    $idade = $_POST["idade"];
    $nome = $_POST["nome"];

    if($idade >= 18)
    {
        $resposta = "maior de idade";
    }
    else
    {
        $resposta = "menor de idade";
    }

?>

<!-- ============== *CÓDIGO HTML* ============== -->

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de idade</title>
    <link rel="stylesheet" href="idade.css">
</head>

<header>

    <div class="logo">  
        <h2>Daniel <span>Gava Dias</span></h2>
    </div>

    <nav>
         <a href="#voltar">Voltar</a> 
    </nav>

</header>



<body>
    
    <form method="POST">

    <label >Nome: </label>
    <br>
    <input type="text" id="nome" name="nome">
    <br>
  
    <label >Idade: </label>
    <br>
    <input type="number" id="idade" name="idade">
    <br>

    <button type="submit">CADASTRAR</button>

    </form>
    
    
    <div class="conclusao">
    
    <h1>
        <?=$nome?> tem <?=$idade?> anos de idade.
    </h1>
    
    <h2>
        Portanto, é <?=$resposta?>!
    </h2>

    </div>
    

    
  
</body>

</html>