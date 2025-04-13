<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php 
            /*
                Matrizes
                - No PHP é um vetor dentro de outro vetor
                - $matriz = array(array(2,3), array(3,4), array(5,6))
                    - Matriz: Matriz com 3 linhas e 2 colunas
                    [2][3]
                    [3][4]
                    [5][6]
            */
            $m = array(array(2,3), //Definição da matriz
                        array(3,4),
                        array(5,6));
            $m[0][1] = $m[2][1]; //Troca o valor da linha 0 e coluna 1 (3) para o valor da linha 2 e coluna 1 (6)
            print_r($m);
        ?>
        </pre>
    </div>
</body>
</html>