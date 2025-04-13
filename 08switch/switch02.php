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
            /*
                Podem ser definidos grupos de casos para cada resultado
            */
            $dia = isset($_GET["sem"])?$_GET["sem"]:2;
            switch($dia){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Hoje é dia de ir para a escola!";
                    break;
                case 7:
                case 8:
                    echo "Hoje é dia de descanso";
                    break;
            }
        ?>
        <br/><a href="switch02.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>