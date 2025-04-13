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
            $tab = isset($_GET["tab"])?$_GET["tab"]:1;
            $cont = 1;
            echo "<h1>Tabuada de $tab</h1>";
            do {
                $calc = $tab * $cont;
                echo "$tab x $cont = $calc <br/>";
                $cont++;
            } while ($cont <= 10);
        ?>
        <br /><a href="do_while03.html"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>