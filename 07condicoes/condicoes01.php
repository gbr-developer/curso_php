<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Condições Simples
                - if (condição 2) {
                    Resultados 1
                } else {
                    Resultados 2
                }
                    - Se a condição 1 for verdadeira, considere o resultado 1, se não, considere o resultado 2
            */
            $nasc = isset($_POST["nasc"])?$_POST["nasc"]:2000;
            $idade = date("Y") - $nasc;
            echo "Você nasceu em $nasc e tem $idade anos<br/>"; 
            if ($idade >= 18){
                $v = "pode votar";
                $d = "pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            };
            echo "Você $v e $d"
        ?>
    <br/><a href="condicoes01.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>