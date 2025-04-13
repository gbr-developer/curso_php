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
                substr_count($string, "elemento procurado"): Conta quantas vezes um elemento especificado aparece na string
            */
            $frase = "Estou aprendendo PHP com o Curso em Vídeo de PHP";
            $cont = substr_count($frase, "PHP");
            echo "$frase <br/>";
            echo "A palavra 'PHP' foi encontrada $cont vezes na frase";
        ?>
    </div>
</body>
</html>