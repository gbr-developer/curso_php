<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $ano = $_GET["ano"];
            echo "O ano atual é $ano e o ano anterior é ".--$ano;
        ?>
    </div>
</body>
</html>