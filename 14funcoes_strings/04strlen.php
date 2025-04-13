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
            $txt = "Curso em Vídeo";
            $tam = strlen($txt); //Calcula o comprimento da string
            echo "$txt </br>";
            echo "$tam caracteres"; 
        ?>
    </div>
</body>
</html>