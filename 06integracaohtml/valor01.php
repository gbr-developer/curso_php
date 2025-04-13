<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração Valor</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* 
                Method
                - method="get" é recebido por $_GET["name"]
                - method="psot" é recebido por $_POST["name"]
            */
            $valor = $_GET["n"]; //Seleciona o input de name="n" no HTML
            $raiz = sqrt($valor);
            echo "A raíz de $valor é igual a ".number_format($raiz, 2 , ",",".");
        ?>
    <p><a href="integracao01.html">Voltar</a></p>
    </div>
</body>
</html>