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
            $nome = "Gabriel Borges";
            $minuscula = strtolower($nome); //strtolower($string): Transforma a string em minúscula
            $maiuscula = strtoupper($nome); //strtoupper($string): Transforma a string em maiúscula
            print "Seu nome em minúsculas: $minuscula<br/>";
            print "Seu nome em maiúscula: $maiuscula<br/>";
            
        ?>
    </div>
</body>
</html>