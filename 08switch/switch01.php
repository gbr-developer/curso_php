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
                Condições de múltiplos casos
                - switch ($variável){
                     case 1:
                        resultado 1;
                        break;
                    case 2:
                        resultado 2;
                        break;
                    defaut:
                        resultado 3;
                - Considera um resultado caso a variável seja condizente com o caso
                - Break: é necessário um "break" em cada caso para terminar a condição no resultado selecionado
                - Default: volta um resultado específico quando nenhum caso é condizente
                }
            */
        $n = isset($_GET["n"]) ? $_GET["n"] : 0;
        $calc = isset($_GET["calc"]) ? $_GET["calc"] : "Operação Não Definida";
        echo "O Número escolhido foi $n<br/>";
        switch ($calc) {
            case 1:
                $r = $n * 2;
                echo "O dobro de $n é igual a $r";
                break;
            case 2:
                $r = pow($n, 3);
                echo "O cubo de $n é igual a $r";
                break;
            case 3:
                $r = sqrt($n);
                echo "A raíz quadrada de $n é igual a " . number_format($r, 2, ",", ".");
                break;
            default:
                echo "Erro: Operação não escolhida";
        }
        ?>
        <br /><a href="switch01.html"><input type="button" value="Voltar"></a>
    </div>
</body>

</html>