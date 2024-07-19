<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body style="font-family: sans-serif">
    <?php 
        echo "<h2>Variaveis</h2>";
        $nome = 'Yan';
        $idade = 24;
        $altura = 1.80;
        echo "Declarar variaveis -> $<br>";
        echo "Nome: $nome <br>";
        echo "idade: $idade <br>";
        echo "Altura: $altura <br>";
        echo "Redeclarar variaveis com tipos diferentes <br>";
        $nome = 99;
        $idade = '24';
        $altura = true;
        echo "Nome: $nome <br>";
        echo "idade: $idade <br>";
        echo "Altura: $altura <br>";
        echo "<h2>Variaveis dinamicas</h2> <br>";
        $bebida = 'refri';
        $$bebida = 'coca-cola';
        echo "Refri: $refri <br>";
        echo "$$ bebida";
    ?>
</body>
</html>