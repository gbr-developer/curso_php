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
            $tab = $_GET["tab"];
            for($cont=1;$cont<=10;$cont++){
                $calc = $tab * $cont;
                echo "$tab x $cont = $calc<br/>";
            }
        ?>
        <br/><a href="for02.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>