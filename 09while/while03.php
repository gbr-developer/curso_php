<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição (while)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $inicio = $_GET["inicio"];
        $final = $_GET["final"];
        $inc = $_GET["inc"];
        if ($inicio < $final) {
            while ($inicio <= $final) {
                echo "$inicio<br/>";
                $inicio += $inc;
            }
        } else {
            while ($inicio >= $final) {
                echo "$inicio<br/>";
                $inicio -= $inc;
            }
        }
        ?>
        <br /><a href="while03.html"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>