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
            function soma(){
                $p = func_get_args(); //func_get_args(): Armazena os valores da soma em um vetor
                $tot = func_num_args(); //func_num_args(): Calcula o total de elementos no vetor
                $s = 0;
                for($c=0;$c<$tot;$c++){ 
                    $s += $p[$c]; //Soma A variável $s e o valor no vetor $p[] em cada passo
                }
                return $s; 
            }

            $res = soma(1, 2, 3, 4, 5, 6, 7, 8);
            echo "O Resultado da soma é $res";
        ?>
    </div>
</body>
</html>