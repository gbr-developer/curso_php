<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuição por referência</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Variáveis Referenciadas
                - $b = &$a: Associa o valor da variável A com a variável B, sempre que $a mudar, $b também mudará para o mesmo valor
            */ 
            $a = 3;
            $b = &$a; //Variável referenciada
            echo "a = $a";
            echo "<br/>b = $b";
            $b = ++$b;
            echo "<br/>novo a = $a";
            echo "<br/>novo b = $b";

        ?>
    </div>
</body>
</html>