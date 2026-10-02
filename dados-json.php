<?php
    
    //VERIFICA SE O FORMULARIO FOI ENVIADO COM O METODO POST
    if($_SERVER["REQUEST_METHOD"]=="POST")
    
    {
    
    $nome = $POST_["nome"];
    $idade = $POST_["idade"];

    // RECEBE NOTAS PORTUGUÊS
    $portugues_prova1 = $POST_["portugues_prova1"];
    $portugues_prova2 = $POST_["portugues_prova2"];
    $portugues_prova3 = $POST_["portugues_prova3"];

    // RECEBE NOTAS PORTUGUÊS
    $matematica_prova1 = $POST_["matematica_prova1"];
    $matematica_prova2 = $POST_["matematica_prova2"];
    $matematica_prova3 = $POST_["matematica_prova3"];

    // RECEBE NOTAS BIOLOGIA
    $biologia_prova1 = $POST_["biologia_prova1"];
    $biologia_prova2 = $POST_["biologia_prova2"];
    $biologia_prova3 = $POST_["biologia_prova3"];
    


        echo "<h2> DADOS RECEBIDOS: </h2>";

        echo "Nome: " . $nome . "<br>";
        echo "Idade: " . $idade . "<br><br>";

        echo "<strong>Português: </strong><br>";
        echo "Prova 1:" . $portugues_prova1 . "<br>";
        echo "Prova 2:" . $portugues_prova2 . "<br>";
        echo "Prova 3:" . $portugues_prova3 . "<br><br>";

        echo "<strong>Matemática: </strong><br>";
        echo "Prova 1:" . $matematica_prova1 . "<br>";
        echo "Prova 2:" . $matematica_prova2 . "<br>";
        echo "Prova 3:" . $matematica_prova3 . "<br><br>";

        echo "<strong>Biologia: </strong><br>";
        echo "Prova 1:" . $biologia_prova1 . "<br>";
        echo "Prova 2:" . $biologia_prova2 . "<br>";
        echo "Prova 3:" . $biologia_prova3 . "<br><br>";

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CADASTRO DE NOTAS</h1>
    <label>Nome: </label>
    <input type="text" name="nome" required>
    <br><br>
    <label>Idade: </label>
    <input type="number" name="idade" required>
    <br><br>

    <h2>PORTUGUÊS</h2>
    <label>Prova 1:</label>
    <input type="number" name="portugues_prova1" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 2:</label>
    <input type="number" name="portugues_prova2" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 3:</label>
    <input type="number" name="portugues_prova3" min="0" max="10" step="0.1" required>
    <br><br>

    <h2>MATEMÁTICA</h2>
    <label>Prova 1:</label>
    <input type="number" name="matematica_prova1" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 2:</label>
    <input type="number" name="matematica_prova2" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 3:</label>
    <input type="number" name="matematica_prova3" min="0" max="10" step="0.1" required>
    <br><br>

    <h2>BIOLOGIA</h2>
    <label>Prova 1:</label>
    <input type="number" name="biologia_prova1" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 2:</label>
    <input type="number" name="biologia_prova2" min="0" max="10" step="0.1" required>
    <br><br>
    <label>Prova 3:</label>
    <input type="number" name="biologia_prova3" min="0" max="10" step="0.1" required>
    <br><br>











</body>
</html>