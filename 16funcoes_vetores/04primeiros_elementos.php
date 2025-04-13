<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para vetores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <pre>
        <?php
        $vetor = array(3, 4, 7, 2, 1);
        print_r($vetor);
        array_unshift($vetor, 10); //Adiciona elemento no primeiro índice do vetor
        print_r($vetor);
        array_shift($vetor);//Remove o primeiro elemento do vetor
        print_r($vetor)
        ?>
        </pre>
    </div>
</body>

</html>