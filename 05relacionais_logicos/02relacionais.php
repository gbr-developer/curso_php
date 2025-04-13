<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Operadores Relacionais
                - ">": Maior, "<": Menor, ">=": Maior ou igual, "<=": Menor ou igual;
                - "<>", "!=": Diferente
                - "==": Igual
                - "===": Idêntico
            */
           $a = 3;
           $b = "3";
           $r = $a == $b?"Sim":"Não";
           echo "As variáveis A e B são iguais? $r<br/>";
           $r = $a === $b?"Sim":"Não";
           echo "As variáveis A e B são idênticas? $r";
        ?>
    </div>
</body>
</html>