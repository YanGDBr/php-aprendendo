<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopos</title>
</head>
<body style="font-family: sans-serif;">
    <?php 
    // Global Escopo
    $nome = "Joao";
    $nome2 = "Maria";
    echo "<h2>Escopos</h2>";
    echo "<h3>Global em Local</h3>";
    echo "Utilizar global {variavel} no escopo local";
    function exibir(){
        // Local
        global $nome, $nome2;
        echo "<h4>$nome e $nome2</h4>";
    }
    exibir();

    echo 'Ou Utilizar $GLOBALS[] no escopo local';
    $a = 5;
    $b = 7;
    function soma(){
        $soma = $GLOBALS['a'] + $GLOBALS['b'];
        echo "<h4>$soma</h4>";
    }
    soma();
    ?>
</body>
</html>