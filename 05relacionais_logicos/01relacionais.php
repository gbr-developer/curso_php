<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* 
                Operador Unário
                - Funciona como uma estrutura condicional simples, em uma linha
                - (Condição) ? Valor verdadeiro : valor falso;
                    - Se a condição for verdadeira, retorna valor verdadeiro, se não, retorna valor falso
            */
            $n1 = $_GET["x"];
            $n2 = $_GET["y"];
            $tipo = $_GET["op"];
            echo "Os valores passados foram $n1 e $n2 <br/>";  
            $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; //Operador Unário: Caso ($tipo == "s"), retorna $n1 + n2, se não, retorna $n1 * $n2
            echo "O resultado será $r";
        ?>
    </div>
</body>
</html>