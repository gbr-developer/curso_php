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
                - substr($string, inicio, fim): recebe uma parte da string selecionada
            */
            $site = "Curso em Vídeo";
            $sub = substr($site, 0, 5);//variável, início, fim (Valores negativos: Começa da direita)
            echo "$sub "
        ?>
    </div>
</body>
</html>