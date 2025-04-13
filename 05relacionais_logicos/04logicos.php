<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            /*
                Operadores Lógicos
                and, &&: E
                or, ||: Ou
                xor: Ou exclusivo (Apenas um ou outro, não pode ser os dois)
                !: Não
            */
            $nasc = $_GET["ano"];
            $idade = date("Y") - $nasc;
            echo "Quem nasceu em $nasc tem $idade anos!<br/>";
            $sit = ($idade >= 18 && $idade <= 64) ?"Voto obrigatório":"Não obrigatório";
            echo "Sua situação de voto é: $sit";
        ?>
    </div>
</body>
</html>