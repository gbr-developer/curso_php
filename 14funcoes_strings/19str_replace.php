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
                - str_replace("palavra substituida", "palavra que irá substituir", $string)
                    - Substitui uma parte da string por outra
            */ 
            $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
            $novo = str_replace("Matemática", "PHP", $frase); //str_ireplace: mesmo comando ignorando letras maiúsculas e minúsculas 
            echo "Original: $frase <br/>";
            echo "Novo: $novo";
        ?>
    </div>
</body>
</html>