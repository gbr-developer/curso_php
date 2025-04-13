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
                - str_pad($string, quantidade de caracteres, "caractere de preenchimento", posicionamento)
                    - Faz com que um valor caiba em um determinado número de caracteres
                    - Posicionamento: STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH
            */
            $nome = "Borges";
            $novo = str_pad($nome, 12, "-", STR_PAD_BOTH);
            print("Gabriel $novo Reinaldo");
        ?>
    </div>
</body>
</html>