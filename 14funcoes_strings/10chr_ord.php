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
                - ord("caractere"): Retorna o código de uma caractere
                - chr("código"): Retorna um caractere a partir de um código
            */
            $l = "C";
            $cod = ord("$l");
            echo "A letra $l tem o código $cod<br/>";
            $letra = chr($cod);
            echo "A letra de código $cod é $letra<br/>";
            
        ?>
    </div>
</body>
</html>