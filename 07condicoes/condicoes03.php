<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de média</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.sit{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            $nota1 = $_POST["n1"];
            $nota2 = $_POST["n2"];
            $media = ($nota1 + $nota2) / 2;
            echo "A média entre <span class='sit'>$nota1</span> e <span class='sit'>$nota2</span> é igual a <span class='sit'>$media</span><br/>";
            if ($media >= 7){
                $sit = "<span class='sit'>Aprovado</span>";
            } elseif ($media >= 5){
                $sit = "<span class='sit'>Recuperação</span>";
            } else {
                $sit = "<span class='sit'>Reprovado</span>";
            }
            echo "Situação do aluno: $sit"
        ?>
        <br/><a href="condicoes03.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>