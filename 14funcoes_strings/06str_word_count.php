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
                str_word_count()
                - Conta a quantidade de palavras na string
                - str_word_count($string, (0, 1, 2))
                    - 0: Conta quantas palavras tem a string
                    - 1: Cria um vetor com cada palavra em um índice
                    - 2: Cria um vetor com cada palavra e transforma o índice para o número de letras

            */
           $frase = "Eu estou aprendendo PHP";
           $cont0 = str_word_count($frase, 0); 
           echo "'$frase' tem $cont0 palavras<br/>";
           $cont1 = str_word_count($frase, 1);
           print_r($cont1);
           echo "<br/>";
           $cont2 = str_word_count($frase, 2);
           print_r($cont2);
        ?>
    </div>
</body>
</html>