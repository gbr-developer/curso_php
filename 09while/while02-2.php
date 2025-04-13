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
        <?php 
            $i = 1;
            while ($i<=5){
                $v = $_GET["v".$i];
                echo "Valor $i: $v</br>";
                $i++;
            }
        ?>
        <a href="while02.php"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>