<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de String</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Funções de Strings</h2>
    <?php
        $texto = "tEXto";
        echo "Transformar texto para Maiscula -> strtoupper <br>";
        echo strtoupper($texto)."<br>";
        echo "Transformar texto para Minusculo -> strtolower <br>";
        echo strtolower($texto)."<br>";
        echo "Pegar uma parte do texto -> substr <br>";
        echo substr($texto, 0, 2)."<br>";
        echo "Retornar tamanho da string -> strlen <br>";
        echo strlen($texto)."<br>";
        echo "trocar palavras de uma string -> str_replace <br>";
        echo str_replace("EX", "trocado", $texto)."<br>";
        echo "Pegar o indice de tal palavra dentro de uma string -> strpos <br>";
        echo strpos($texto, "EX")."<br>";
    ?>
    <h2>Funções de Numeros</h2>
    <?php
    $numero = 1245.67;
    echo "Formatar numeros -> number_format <br>";
    echo number_format($numero, 2, ',', '.')."<br>";
    echo "Funções de arredondamento -> round para o mais próximo, ceil para cima, floor para baixo <br>";
    echo round($numero)."<br>";
    echo ceil($numero)."<br>";
    echo floor($numero)."<br>";
    echo "Gerar numeros aleatórios dentro de um intervalo -> rand(valormin, valormax)<br>";
    echo rand(1,100)."<br>";
    ?>
</body>
</html>