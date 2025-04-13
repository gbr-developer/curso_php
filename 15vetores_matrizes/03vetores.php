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
                Foreach
                - Para cada índice do vetor, imprime um valor
                - foreach($vetor as $valor){
                    Resultado
                }
                
            */ 
            $n = range(5,20,2);
            foreach($n as $v){ 
                echo "$v ";
            }
        ?>
        </pre>
    </div>
</body>
</html>