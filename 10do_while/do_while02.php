<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esstrutura de Repetição (Do While)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $n = $_GET["n"];
        $cont = $n;
        $fat = 1;
        do {
            $fat *= $cont;
            $cont--;
        } while ($cont >= 1);
        echo "O Fatorial de $n é igual a $fat";
        ?>
        <br /><a href="do_while02.html"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>