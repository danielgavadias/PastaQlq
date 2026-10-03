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

    $novoAluno = [
        "nome" => $nome,
        "idade" => $idade,

        "notas" => [
            "portugues" =>[
                "prova1" => $portugues_prova1,
                "prova2" => $portugues_prova2,
                "prova3" => $portugues_prova3,
            ],

            "matematica" =>[
                "prova1" => $matematica_prova1,
                "prova2" => $matematica_prova2,
                "prova3" => $matematica_prova3,
            ],

            "biologia" =>[
                "prova1" => $biologia_prova1,
                "prova2" => $biologia_prova2,
                "prova3" => $biologia_prova3,
            ],
        ],

    ];

    //LER/ABRIR ARQUIVOS NO JSON

    $conteudoJson = file_get_contents(__DIR__."dados/intro.json"),
    
    //SERVE PARA CONVERTER JSON PARA ARRAY PARA PHP
    //O TRUE CONVERTE O JSON EM ARRAY ASSOCIATIVO PARA PHP LER   
    $alunos = json_decode($conteudoJson, true);

    //ADICIONAR O NOVO ALUNO
    $alunos[] = $novoAluno;
    
    //CONVERTER O ARRAY PHP PARA JSON
    $jsonAtualizado = json_encode(
        $alunos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        //1 - FORMATA DE FORMABONITA
        //2 - ENTENDE OS CARACTERES ESPECIAIS
    );

    //SALVAR NO ARQUIVO JSON
    file_put_contents(__DIR__. "/dados/intro.json", $jsonAtualizado)
}

//LEITURA DOS DADOS P/ EXIBIÇÃO

//LÊ O ARQUIVO JSON
$conteudoJson = file_get_contents(__DIR__. "/dados/intro.json");

//CONVERTE O JSON PARA ARRAY PHP
$alunos = json_decode($conteudoJson, true);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="portifolio.css">
</head>

<body>
    <form>
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
    <button type="submit">ENVIAR</button>
    </form>

    <H1>ALUNOS CADASTRADOS</H1>

    <?php foreach($alunos as $aluno) {?>

        <h2> <?= $aluno ["nome"] ?> </h2>
        <p> Idade <?=$aluno["idade"]?> </p>

        <!--PORTUGUÊ<S-->
        <H2>PORTUGUÊS</H2>
        <p>Prova 1: <?= $aluno["notas"]["portugues"]["prova1"]?></p>
        <p>Prova 2: <?= $aluno["notas"]["portugues"]["prova2"]?></p>
        <p>Prova 3: <?= $aluno["notas"]["portugues"]["prova3"]?></p>

        <!--MATEMÁTICA<S-->
        <H2>MATEMÁTICA</H2>
        <p>Prova 1: <?= $aluno["notas"]["matematica"]["prova1"]?></p>
        <p>Prova 2: <?= $aluno["notas"]["matematica"]["prova2"]?></p>
        <p>Prova 3: <?= $aluno["notas"]["matematica"]["prova3"]?></p>

        <!--BIOLOGIA<S-->
        <H2>BIOLOGIA</H2>
        <p>Prova 1: <?= $aluno["notas"]["biologia"]["prova1"]?></p>
        <p>Prova 2: <?= $aluno["notas"]["biologia"]["prova2"]?></p>
        <p>Prova 3: <?= $aluno["notas"]["biologia"]["prova3"]?></p>


    <?php};?>

    
   

    

</body>
</html>