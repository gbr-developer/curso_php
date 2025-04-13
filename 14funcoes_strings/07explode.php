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
                explore()
                - Cria um vetor da string com um caractere de separação definido
                - explode("caractere de separação", $string)
            */
           $frase = "Curso em Vídeo";
           $vetor = explode(" ", $frase); 
           print_r($vetor);
           
        ?>
    </div>
</body>
</html>