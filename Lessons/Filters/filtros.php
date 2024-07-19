<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros de Validação</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Filtros de Validação</h2>
    <?php
        echo "São filtros para validar certos tipos de dados insiridos no POST ou GET <br><br> São: filter_input e filter_var <br>";
        if(filter_input(INPUT_GET, 'variavel', FILTER_VALIDATE_INT)){
            echo "Está Correto, é um numero";
        }
        else {
            echo "Está errado, não é um numero";
        }
        echo "<br><br>Existem muitos filtros de validação, pesquisar caso precise de algum especifico";

    ?>
    <h2>Sanitização</h2>
    <?php

    echo "São filtros de limpeza, para limpar os dados, por exemplo colocar um código no input, limpar o código, limpar o texto e deixar só o numero etc <br> <br>";

    $var = filter_input(INPUT_GET, 'variavel', FILTER_SANITIZE_NUMBER_INT);
    echo $var;
    echo "<br><br>Existem muitos filtros de limpeza, pesquisar caso precise"


    ?>
</body>
</html>