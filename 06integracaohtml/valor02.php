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
                - isset: Define um valor padrão para quando o valor não não for preenchido e não retornar erro (quando o arquivo é aberto direto do PHP)
                    - Operador Unário: Com o isset, retorna o valor selecionado caso preenchido, caso não preenchido retorna um valor definido
            */ 
            $nome = isset($_GET["nome"])?$_GET["nome"]:"Nâo informado";//Define um valor padrão para o valor não preenchido
            $nasc = isset($_GET["nasc"])?$_GET["nasc"]:0;
            $idade = date("Y") - $nasc; //date("Y"): Retorna o ano atual da máquina em 4 dígitos
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Não informado";
            echo "<p>Nome: $nome</p>";
            echo "<p>Ano de Nascimento: $nasc</p>";
            echo "<p>Sexo: $sexo</p>";
            echo "<p>Idade: $idade</p>";

        ?>
    <a href="integracao02.html"><input type="button" value="Voltar"></a>
    </div>
</body>
</html>