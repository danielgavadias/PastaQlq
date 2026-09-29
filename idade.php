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



<body>
    
    <form method="POST">

    <label >Nome: </label>
    <br>
    <input type="text" id="nome" name="nome">
  
    <label >Idade: </label>
    <br>
    <input type="number" id="idade" name="idade">

    <button type="submit">CADASTRAR</button>

    </form>
    
    
    <div class="conclusao">
    
    <h1>
        <?=$nome?> tem <?=$idade?>.
    </h1>
    
    <h2>
        Portanto, é <?=$resposta?>!
    </h2>

    </div>
    

    
  
</body>

</html>