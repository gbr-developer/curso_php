<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Funções que não retornam valor
                - Define uma rotina que pode ser chamada durante o código, mas não retorna valor a uma variável
                - funcion nome (variáveis requeridas){
                    resultados
                }
                nome (valores requeridos)
            */
            function soma ($a, $b){
                $s = $a + $b;
                echo "<p>A soma entre $a e $b é igual a $s</p>";
            } //Definição da função
            
            soma(4, 3); //Chamada da função
            soma(3, 2);
            $x = 9;
            $y = 15;
            soma($x, $y);
        ?>
    </div>
</body>
</html>