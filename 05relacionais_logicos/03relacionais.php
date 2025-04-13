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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            echo "As notas do aluno foram $nota1 e $nota2";
            $m = ($nota1 + $nota2) / 2;
            echo "<br/>A média do aluno foi $m";
            echo "<br/>O aluno foi ".($m>=6?"aprovado":"reprovado");
        ?>
    </div>
</body>
</html>