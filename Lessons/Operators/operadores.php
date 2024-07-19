<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Operadores Aritméticos</h2>
    <?php
        $num = 20;
        $numero = 30;
        echo "Soma é +";
        echo "<br>";
        echo $numero + $num;
        echo "<br>";
        echo "Subtração é -";
        echo "<br>";
        echo $numero - $num;
        echo "<br>";
        echo "Multiplicação é *";
        echo "<br>";
        echo $numero * $num;
        echo "<br>";
        echo "Divisão é /";
        echo "<br>";
        echo $numero / $num;
        echo "<br>";
        echo "Resto da Divisão é %";
        echo "<br>";
        echo $numero % $num;
        echo "<br>";
        echo "Exponentes é **";
        echo "<br>";
        echo $numero ** $num;
        echo "<br>";


    ?>
    <h2>Decremento e Incremento</h2>
    <?php
        $valor = 10;
        echo "Pós decremento";
        echo "<br>";
        echo $valor--;
        echo "<br>";
        echo "Pré decremento";
        echo "<br>";
        echo --$valor;
        echo "<br>";
        echo "Pós Incremento";
        echo "<br>";
        echo $valor++;
        echo "<br>";
        echo "Pré Incremento";
        echo "<br>";
        echo ++$valor;
        echo "<br>";
    ?>
    <h2>Atribuição</h2>
    <?php
        echo "= para DEFINIR <br>";
        echo "{operador}= para fazer a conta do operador com o próprio numero e outro numero. ex: +=, -=, *=, /="
    ?>
    <h2>Comparação</h2>
    <?php
        echo "==";
        echo "<br>";
        echo "===";
        echo "<br>";
        echo "!=";
        echo "<br>";
        echo ">=";
        echo "<br>";
        echo "<=";
        echo "<br>";
        echo "!=";
        echo "<br>";
        echo ">";
        echo "<br>";
        echo "<";
        echo "<br>";
        echo "!===";
        echo "<br>";
        echo "<=>";
        echo "<br>";
       
    ?>
    <h2>Operadores Lógicos</h2>
    <?php
        echo "&& - and";
        echo "<br>";
        echo "|| - or";
        echo "<br>";
        echo "xor - só retorna true se apenas UM for verdadeiro";
        echo "<br>";
        echo "! - inverte o valor boolean";
        

    ?>
</body>
</html>