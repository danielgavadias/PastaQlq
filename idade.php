<?php 

    $idade = 45;

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

    <h2><?= "Você tem ", $idade, "anos!" ?></h2>
    <h3><?= "logo, é ", $resposta ?></h3>

</header>

<body>
    
</body>
</html>