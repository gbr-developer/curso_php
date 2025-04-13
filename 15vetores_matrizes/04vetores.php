<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php 
            /* 
                Vetor com atribuição de índices e valores
                - array(índice => valor,)
            */
            $v = array(1=>"A", 3=>"B", 6=>"C", 10=>"D");
            unset($v[6]); //unset($vetor[índice]): Remove o índice informado do vetor
            print_r($v);
        ?>
        </pre>
    </div>
</body>
</html>