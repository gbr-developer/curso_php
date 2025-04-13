<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição (for)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
            /*
                Estrutura de repetição com variável de controle
                - Define todas as propriedades antes de testar
                - for (inicio; condição; incremento){
                    resultado
                }
            */
            echo "<h1>Contagem Progressiva</h1>";
            for ($c = 1;$c<=10;$c++){
                echo "$c ";
            }
            echo "<h1>Contagem Regressiva</h1>";
            for ($c = 10;$c>=1;$c--){
                echo "$c ";
            }
            echo "<h1>Contagem Progressiva de Pares</h1>";
            for ($c = 0;$c<=20;$c+=2){
                echo "$c ";
            }
        ?>
    </div>
</body>

</html>