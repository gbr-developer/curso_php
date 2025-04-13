<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        h1 {
            font: 1.5em Arial;

        }
    </style>
</head>
<body>
    <div>
        <?php
            /*
                - $_GET["name"]: Seleciona o valor digitado em um formulário ou na própria URL da página
                    ex: http://localhost/cursophp/aula05/funcoes_aritmeticas.php?x=4&y=7

                Funções Aritméticas
                - abs($valor): Valor absoluto
                - pow($valor, expoente): Potenciação
                - sqrt($valor): Raíz quadrada
                - round($valor): Arredondamento
                    - cell($valor): Arredonda para cima
                    - floor($valor)> Arredonda para baixo
                - intval($valor): Valor inteiro
                - number_format($valor, número de decimais, separador de decimais, separador de milhar ): Formatação do valor
            */  
            $v1 = $_GET["x"]; //Seleciona valor digitado na url (url?x=valorx&y=valory)
            $v2 = $_GET["y"];
            echo "<h1>Valores recebidos $v1 e $v2</h1>";
            echo "O valor absoluto de $v2 é " . (abs($v2));
            echo "<br/>O valor de $v1<sup>$v2</sup> é " . (pow($v1, $v2));
            echo "<br/>A raíz de $v1 é " . (sqrt($v1));
            echo "<br/>O valor de $v2 arredondado é " . (round($v2)); 
            echo "<br/>A parte inteira de $v2 é " . (intval($v2));
            echo "<br/>O valor de $v1 em moeda é R$" . (number_format($v1,2,",","."));
        ?>
    </div>
</body>
</html>