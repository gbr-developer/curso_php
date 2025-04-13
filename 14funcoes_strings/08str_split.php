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
                str_split($string, número de letras por índice)
                - Cria um vetor com cada letra da string 
            */
           $nome = "Maria";
           $vetor = str_split($nome); 
           print_r($vetor);
        ?>
    </div>
</body>
</html>