<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição (While)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <h1>Contagem</h1>
        <?php 
            /*
                Estrutura de Repetição com teste lógico no começo
                - Testa primeiro e depois executa
                - while (condição) {
                    resultado;
                    incremento;
                  }
                - Enquanto uma condição for atendida, repita um resultado e incremente o valor de controle
            */
            $n = 10;
            while($n >= 0){
                echo "$n<br/>";
                $n -= 2;
            }
        ?>
    </div>
</body>
</html>