<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Variáveis de Variáveis
                $$x: Cria uma nova variável baseada em outra variável, recebendo o valor da variável referenciada para como nome da nova variável
            */
            $x = "abc";
            $$x = "def"; //Criou a variável: $abc
            echo "O conteúdo da variável x é $x";
            echo "<br/>A variável criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>