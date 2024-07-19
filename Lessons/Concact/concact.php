<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body style="font-family: sans-serif;">
    
    <?php 
        echo "<h2>Concatenação</h2>";
        $nome = "Yan";
        $idade = 24;

        echo "Meu nome é $nome e tenho $idade anos <br>";
        echo "<br>";
        echo 'Meu nome é '.$nome.' e tenho '.$idade.' anos <br>';
        echo "<br>";
        echo "<h2>Diferença de Aspas</h2>";
        echo "<h2>'</h2>";
        echo 'Meu nome é $nome e tenho $idade anos <br>';
        echo "<h2>\"</h2>";
        echo "Meu nome é $nome e tenho $idade anos <br>";
        echo "<h2>Colocar aspas duplas/unicas em strings com Aspas equivalente</h2>";
        echo "Utilizar \{aspas} -> \"\"";

    ?>

</body>
</html>