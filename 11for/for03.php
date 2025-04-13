<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição (for)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $num = isset($_GET["num"])?$_GET["num"]:1;
            $tmulti = 0;
            echo "Analisando o número $num<br/>";
            echo "Valores múltiplos: ";
            for($cont = 1;$cont <= $num; $cont++){
               if ($num%$cont == 0){
                $multi = $cont;
                echo "$cont ";
                $tmulti++;
               } 
            }
            echo "<br/>Total de múltiplos: $tmulti";
            if($tmulti == 2){
                echo "<br/>Resultado: $num é primo!";
            } else {
                echo "<br/>Resultado: $num não é primo!";
            }
        ?>
        <br/><a href="for03.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>