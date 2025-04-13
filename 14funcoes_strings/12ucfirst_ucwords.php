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
            $nome = "gabriel borges"; 
            $ucf = ucfirst($nome); //ucfirst($string): Muda a primeira letra da string para maiúscula
            $ucw = ucwords($nome); //ucwords($string): Muda a primeira letra de cada palavra para maiúscula
            print "ucfirst: $ucf<br/>";
            print "ucwords: $ucw<br/>";
            
        ?>
    </div>
</body>
</html>