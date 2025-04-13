<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá Mundo!</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        h2 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
        
<body>
    <div>
        <h1>Testando PHP</h1>
        <?php 
        /*
            - <?php ?>: Supertag que inclui o código PHP no HTML
            - echo "": Mostra a informação na tela
                - print: mesma função do echo
                - printf: imprime com formatação
            - todo comando deve terminar com ;
        */
        echo "<h2>Olá, Mundo!</h2>";
        ?>
    </div>
</body>

</html>