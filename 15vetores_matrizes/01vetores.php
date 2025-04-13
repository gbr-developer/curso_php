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
                Vetores
                - Variável com lista de valores
                - PHP tem vetores dinâmicos, o número de índices será a quantidade que está sendo usada
                - Criação de vetores
                    - $V[1] = 2; Vetor com índice 1 receberá o valor 2
                    - $v = array (1,2,3,4): Variável $v vai receber vetor (1,2,3,4)
                    - $v = range(valor inicial, valor final, passo): Cria um vetor do valor inicial até o valor final seguindo um passo
                -$v[] = 7: Adiciona o valro 7 no último elemento
            */
            $n = array (3, 5, 8, 2); //Criação do array
            $n[] = 7; //Adicionando o valor 7 no último elemento
            print_r($n);  
        ?>
        </pre>
    </div>
</body>
</html>