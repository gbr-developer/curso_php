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
            - Implode("caractere de junção", $vetor)
            - Junta as palavras de cada índice de um vetor e forma uma string
        */
        //implode pode ser substituido por join, funciona da mesma forma
           $vetor[0] = "Curso";
           $vetor[1] = "em";
           $vetor[2] = "Vídeo";
           $txt = implode("-", $vetor);
           print($txt);
        ?>
    </div>
</body>
</html>