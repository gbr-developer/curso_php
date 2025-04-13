<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php    
            /*
            - Variáveis iniciam com $;
            - Faz diferenciação entre maiúscula e minúscula;
            - Tipo de variável é definido automaticamente ao receber o valor;
            */
            $n = 4; //$variável = valor
            $nome = "Gabriel";
            $idade = 21;
            echo "<h1>Mostrando variáveis</h1>";
            echo "<p>$nome</p>"; 
            echo "<p>$n</p>";
            echo "<h2>Concatenação</h2>";
            echo $nome. " tem ". $idade. " anos";
            echo "<p>$nome  tem $idade anos!</p>";
        ?>
    </div>
</body>
</html>