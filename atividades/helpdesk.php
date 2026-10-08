<?php 

    if($_SERVER ["REQUEST_METHOD"] == "POST")

    $nome = $_POST["nome"];
    $setor = $_POST["setor"];
    $equipAfet = $_POST["equipAfet"];
    $pc = $_POST["pc"];
    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];

    $novoChamados = [

        "nome" => $nome,
        "setor" => $setor,
        "equipAfet" => [
            "pc" => $pc,
            "maquina" => $maquina,
        ],
        "descricao" => $descricao,
        "prioridade" => $prioridade,
    ]




?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP DESK</title>
    <link href="helpdesk-func.php">
</head>

<body>
    
</body>
    <h1>CHAMADOS TÉCNICOS</h1>

    <p>Nome do funcionario solicitante: </p><input type="text">
    
    <p>Setor da empresa: </p>
    <button>SETOR A</button>
    <button>SETOR B</button>
    <button>SETOR C</button>
    <button>SETOR D</button>
    
    <p>Equipamento afetado: </p><input type="text">
    
    <p>Descrição do problema: </p><input type="text">
    
    <p>Prioridade: </p>
    <button>BAIXA</button>
    <button>MEDIANA</button>
    <button>ALTA</button>
    <button>EMERGÊNCIA</button>

</html>