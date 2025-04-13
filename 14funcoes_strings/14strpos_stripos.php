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
                - strpos($string, "elemento procurado"): procura a posição de um elemento especificado na string
                - stripos($string, "elemento procurado"): faz o mesmo do strpos, mas ignora maiúsculas e minúsculas
            */
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");//Considera maiúscula e minúscula
            $ipos = stripos($frase, "php");//Ignora maiúscula e minúscula
            echo "$frase<br/>";
            echo "A string 'PHP' foi encontrada na posição: $pos<br/>";
            echo "A string 'php' foi encontrado na posição: $ipos";
        ?>
    </div>
</body>
</html>