<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Atribuições
                - $a = $b: Variável A recebe variável B
                - $a += $b: Variável A recebe Variável A + Variável B
                    - Atribuição serve para todas as operações, basta trocar o + pela operação desejada
                - $a++: Variável A recebe Variável A + 1 
                    - Pós-Incremento ($a++): Usa a variável primeiro e depois incrementa
                    - Pré-Incremento (++$a): Incrementa primeiro e depois usa a variável
                - $a--: Variável A recebe Variável A - 1
                    - Regras de pós e pré decremento também funcionam como as de incremento
                

            */ 
            $preco = $_GET["x"];
            echo "O preço do produto é R$".number_format($preco, 2, ",", ".");
            $preco += $preco * 10 / 100;
            echo "<br/>O novo preço do produto com 10% de aumento é R$".number_format($preco, 2, ",", ".");
        ?>
    </div>
</body>
</html>