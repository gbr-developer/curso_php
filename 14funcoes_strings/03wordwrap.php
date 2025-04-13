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
                Wordwrap
                - Adiciona quebra de linha aos textos
                - wordwrap($texto, caracteres máximo para quebra de linha, comandos incluidos na quebra, quebrar palavra no meio)
                    - Comandos inseridos: <br/>: Quebra visual; \n: Quebra no código fonte
                    - Quebrar palavras no meio: False: não quebra as palavras; True: Quebra as palavras
            */
            $txt = "Este é um exemplo de string grande que precisará de uma quebra de linha com a função wordwrap";
            $res = wordwrap($txt, 5, "<br/>\n", false);
            echo $res;
        ?>
    </div>
</body>
</html>