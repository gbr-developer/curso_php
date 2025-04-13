<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição (While)</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form action="while02-2.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5){
                    echo "<label for='v$c'>Valor $c: </label>";
                    echo "<input type='number' name='v$c' id='v$c' max='100' min='0' value='0'><br />";
                    $c++;
                }
            ?>
                <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>