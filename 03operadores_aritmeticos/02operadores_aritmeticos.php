<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* 
                Operadores Aritméticos
                - "+": Adição
                - "-": Subtração
                - "*": Multiplicação
                - "/": Divisão
                - "%": Módulo

                Ordem de Precedência
                1° ()
                2° * / %
                3° + - 
            */
            $n1 = $_GET['a'];
            $n2 = $_GET['b'];
            $m = ($n1 + $n2) / 2;
            echo "<h1>Considerando os números $n1 e $n2</h1>";
            echo "<br/>A soma vale ". ($n1 + $n2);
            echo "<br/>A subtração vale ".($n1 - $n2);
            echo "<br/>A multiplicação vale ".($n1 * $n2);
            echo "<br/>A divisão vale ".($n1 / $n2);
            echo "<br/>O módulo vale ".($n1 % $n2); 
            echo "<br/>A média vale $m"
        ?>
    </div>
</body>
</html>