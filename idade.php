<?php 

    $idade;

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
</head>

<header>

<section class="inserirIdade">
        <h1>
            Insira sua idade!            
        </h1>
        <form>
            <label>Idade: </label>
            
            <input type="number">
            <button type="submit"> CADASTRAR </button>

        </form>

    </section>


    <h2><?= "Você tem ", $idade, " anos!" ?></h2>
    <h3><?= "logo, é ", $resposta ?></h3>

</header>

<body>
    
</body>
</html>