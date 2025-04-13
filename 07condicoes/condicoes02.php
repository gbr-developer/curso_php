<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        /*
            Condições compostas
            - if(condição 1){
                Resultado 1
            } elseif (condição 2) {
                Resultado 2
            } else {
                Resultado 3
             }
                - Se a condição 1 for verdadeira, considere o resultado 1, se não, se a condição 2 for verdadeira, considere o resultado 2, se não, considere o resultado 3
        */
        $nasc = isset($_POST["nasc"]) ? $_POST["nasc"] : 2000;
        $idade = date("Y") - $nasc;
        echo "Você nasceu em $nasc e tem $idade anos<br/>";
        if ($idade < 16) {
            $tipodevoto = "Não pode votar";
        } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
            $tipodevoto = "Voto Opcional";
        } else {
            $tipodevoto = "Voto Obrigatório";
        }


        echo "Sua situação eleitoral é: $tipodevoto";
        ?>
        <br /><a href="condicoes02.html"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>