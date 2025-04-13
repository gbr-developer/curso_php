<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php 
            $cad = array("nome" => "Ana", "idade" => 23, "peso" => 78.5); //Podem ser atribuidos valores de tipos diferentes no vetor
            $cad["fuma"] = true;
            foreach($cad as $campo => $valor) {
                echo "O valor de $campo é $valor <br/>";
            }
        ?>
        </pre>
    </div>
</body>
</html>