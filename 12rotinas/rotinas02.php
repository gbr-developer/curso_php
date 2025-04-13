<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Funções que retornam valor
                - Funções definidas que podem ser chamadas no código e que retornam o valor a uma variável
                - function nome(variáveis requeridas){
                     return(valor);
                 }
                  $variável = nome(valores requeridos)
                - Valor definido na função será atribuido para a variável que chamou a função
            */
            function soma($a, $b){
                return($a + $b);
            }

            $x = 7;
            $y = 4;
            $res = soma($x, $y);
            echo "A soma entre $x e $y vale $res";
        ?>
    </div>
</body>
</html>