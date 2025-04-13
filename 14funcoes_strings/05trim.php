<!DOCTYPE html>
<html lang="pt-nr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de manipulação de Strings</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /* Também possui ltrim e rtrim para retirar espaços desnecessários 
            apenas da esquerda e direita respectivamente */
            $txt = "   Curso em Video   ";
            $tam = strlen($txt);
            echo "$txt tem $tam caracteres (Com espaços desnecessários)<br/>";
            echo "<br/>";
            $novo_txt = trim($txt); // Remove espaços desnecessários no começo e no final da string
            $tam_novo = strlen($novo_txt);
            echo "Com a função trim, o nome $novo_txt tem $tam_novo caracteres (sem espaços desnecessários)"
        ?>
    </div>
</body>
</html>