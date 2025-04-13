<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esstrutura de Repetição (Do While)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Estrutura de repetição com teste lógico no final
                - Executa primeiro e testa depois
                - Do {
                     resultado;
                     incremento;
                 } while (condição)
                - Repita um resultado enquando a condição for atendida
            */
            $c = 10;
            do {
                echo "$c<br/>";
                $c--;
            } while ($c >= 1);
        ?>
    </div>
</body>
</html>