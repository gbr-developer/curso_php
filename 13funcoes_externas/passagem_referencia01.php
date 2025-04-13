<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem por Referência</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Passagem de valor por referência
                - alterações no valor da função também irá alterar a variável
                - function nome (&$variável){
                    resultado;
                }
            */
            echo "<h1>Passagem de parâmetro por valor</h1>";
            function pvalor ($x){
                $x += 2;
                echo "Valor de X na função: $x<br/>";
            }
            $a = 3;
            pvalor($a);
            echo "Valor da variável A: $a";

            echo "<h1>Passagem de parâmetro por referência</h1>";
            function pref (&$x){ //por referência: & antes do parâmetro
                $x += 2;
                echo "Valor de X na função: $x<br/>";
            }
            $a = 3;
            pref($a);
            echo "Valor da variável A: $a";
        ?>
    </div>
</body>
</html>