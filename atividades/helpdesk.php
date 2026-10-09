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

    $novoChamado = [

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
        ],
    ];

    $conteudoJson = file_get_contents(__DIR__. "dados/dados/chamadas.json");
    $chamados = json_decode($conteudoJson, true);
    $produtos[] = $novoChamado;

    $jsonAtualizado = json_encode(
        $chamados,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
}
    file_put_contents(__DIR__ . "/dados/chamados.json", $jsonAtualizado);

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
<form method="POST">
    <h1>CHAMADOS TÉCNICOS</h1>

    <p>Nome do funcionario solicitante: </p><input type="text">
    
    <p>Setor da empresa: </p>
    <button type="name"> SETOR A <?$setor = "setorA" ?></button>
    <button type="name"> SETOR B <?$setor = "setorB" ?></button>
    <button type="name"> SETOR C <?$setor = "setorC" ?></button>
    <button type="name"> SETOR D <?$setor = "setorD" ?></button>
    
    <p>Equipamento afetado: </p>
    <button type="name"> COMPUTADOR <?$prioridade = "pc" ?></button>
    <button type="name"> MÁQUINA <?$prioridade = "maquina" ?></button>
    <button type="name"> ROTEADOR DE WI-FI <?$prioridade = "roteador" ?></button>
    
    <p>Prioridade: </p>
    <button type="name"> BAIXA <?= $prioridade = "baixa" ?></button>
    <button type="name"> MEDIANA <?= $prioridade = "mediana" ?></button>
    <button type="name"> ALTA <?= $prioridade = "alta" ?></button>
    <button type="name"> EMERGÊNCIA <?$prioridade = "emergencia" ?></button>
    
    <p>Descrição do problema: </p><input type="text">

    <br><br><br>
    <button type="submit">ENVIAR CHAMADO</button>

    <p><?php foreach ($chamados as $chamado){ ?></p>
    
    <h1>CHAMADO: </h1>
    <p>Funcionário: <?= $chamado["Setor"] ?></p>
    <p>Setor: <?= $chamado["Setor"]?></p>
    
    <p>Equipamento afetado: 
        <?php if($chamado["EquipAfet"]["pc"] != NULL)
        {
        echo $chamado["EquipAfet"]["pc"];
        }
        else
        {
            if($chamado["EquipAfet"]["maquina"] != NULL)
            {
                echo $chamado["EquipAfet"]["maquina"];
            }
            else
            {
                echo $chamado["EquipAfet"]["roteador"];
            }
        };
        ?>
    </p>

<?php } ?>
</form></body>
</html>