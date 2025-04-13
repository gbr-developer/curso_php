<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional de Múltiplos Casos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $reg = $_GET["est"];
            switch($reg){
                case 1:
                    $reg = "norte";
                    break;
                case 2:
                    $reg = "nordeste";
                    break;
                case 3:
                    $reg = "centro-oeste";
                    break;
                case 4:
                    $reg = "sudeste";
                    break;
                case 5:
                    $reg = "sul";
            }
            echo "Você mora na região $reg";
        ?>
        <br/><a href="switch03.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>