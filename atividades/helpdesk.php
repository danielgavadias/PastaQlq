<?php 

    if($_SERVER ["REQUEST_METHOD"] == "POST")
    {
    
    $nome = $_POST["nome"];
    $setor = $_POST["setor"];

    $equipAfet = $_POST["equipAfet"];
    $pc = $_POST["pc"];
    $maquina = $_POST["maquina"];
    $roteador = $_POST["roteador"];

    $descricao = $_POST["descricao"];
    $prioridade = $_POST["prioridade"];

    $novoChamados = [

        "nome" => $nome,
        
        "setor" => [
            "setorA" => $setorA,
            "setorB" => $setorB,
            "setorC" => $setorC,
            "setorD" => $setorD,
        ],
        
        "equipAfet" => [
            "pc" => $pc,
            "maquina" => $maquina,
            "roteador" => $roteador
        ],
        
        "descricao" => $descricao,
        
        "prioridade" => [
            "baixa" => $baixa,
            "mediana" => $mediana,
            "alta" => $alta,
            "emergencia" => $emergencia,
        ]
    ]



    }
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
    <button> SETOR A <?$prioridade = "setorA" ?></button>
    <button> SETOR B <?$prioridade = "setorB" ?></button>
    <button> SETOR C <?$prioridade = "setorC" ?></button>
    <button> SETOR D <?$prioridade = "setorD" ?></button>
    
    <p>Equipamento afetado: </p><input type="text">
    <button> COMPUTADOR <?$prioridade = "pc" ?></button>
    <button> MÁQUINA <?$prioridade = "maquina" ?></button>
    <button> ROTEADOR DE WI-FI <?$prioridade = "roteador" ?></button>
    
    <p>Descrição do problema: </p><input type="text">
    
    <p>Prioridade: </p>
    <button> BAIXA <?$prioridade = "baixa" ?></button>
    <button> MEDIANA <?$prioridade = "mediana" ?></button>
    <button> ALTA <?$prioridade = "alta" ?></button>
    <button> EMERGÊNCIA <?$prioridade = "emergencia" ?></button>

</html>