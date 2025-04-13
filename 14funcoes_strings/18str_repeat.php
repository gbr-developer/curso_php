<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de manipulação de Strings</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                - str_repeat("texto repetido", número de repetições): Repete uma determinada string
            */
            $txt = str_repeat("PHP ", 10);
            echo "$txt<br/>";
            $linha = str_repeat("-", 50);
            echo $linha
        ?>
    </div>
</body>
</html>