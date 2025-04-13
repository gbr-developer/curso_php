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
                printf
                - Imprime um texto com formatação
                    - %d: Valor decimal (positivo ou negativo)
                    - %u: Valor decimal sem sinal (apenas positivos)
                    - %f: Valor real
                    - %s: string
                - printf("%s",$variável_string)
            */
            $prod = "Leite";
            $pr = 4.5;
            echo "O $prod custa R$ ".number_format($pr, 2, ",",".");
            printf("<br/>O %s custa R$ %.2f", $prod, $pr); 
        ?>
    </div>
</body>
</html>