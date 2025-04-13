<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        /* Definir algumas variáveis no head permite alterar informações no style */
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>/* Altera para o valor da variável no head */; 
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php 
            echo "<span class='texto'>$txt</span>"
        ?>
        <br/><a href="interacao03.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>