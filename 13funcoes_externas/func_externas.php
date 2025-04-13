<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem por Referência</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Funções Externas
                - include "arquivo.php": inclui o arquivo para chamar funções que estão dentro deste arquivo
                - include_once "arquivo.php": Inclui o arquivo apenas uma vez e ignora inclusões repetidas
                - require "arquivo.php": Requer o arquivo para chamar funções que estão dentro deste arquivo
                - require_once "arquivo.php": Requer o arquivo apenas uma vez e ignora requerimentos repetidos
                - include x require: Include continua a execução mesmo sem achar o arquivo da função chamada, require para a execução caso não encontre o arquivo
            */
            include_once "funcoes.php";
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostravalor(4);
            echo "<h2>Finalizando programa</h2>";
        ?>
    </div>
</body>
</html>