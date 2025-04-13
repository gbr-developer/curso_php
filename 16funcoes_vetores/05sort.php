<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para vetores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <pre>
        <?php
        $vetor = array(2=>3, 1=>0, 5=>1, 0=>2, 9=>4);
        print_r($vetor);

        $svetor = $vetor;
        sort($svetor); //organiza o vetor em ordem crescente
        print_r($svetor);

        $rsvetor = $vetor;
        rsort($rsvetor);//organiza o vetor em ordem decrescente
        print_r($rsvetor);

        $avetor = $vetor;
        asort($avetor);//organiza o vetor em ordem crescente, mas mantém a associação do índice com o valor
        print_r($avetor);

        $arvetor = $vetor;
        arsort($arvetor);//organiza o vetor em ordem decrescente, mas mantém a associação do índice com o valor
        print_r($arvetor);

        $kvetor = $vetor;
        ksort($kvetor);//organiza apenas os índices do vetor de forma crescente
        print_r($kvetor);

        krsort($krvetor);//organiza apenas os índices do vetor de forma decrescente
        print_r($krvetor)
        ?>
        </pre>
    </div>
</body>

</html>