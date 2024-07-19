<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais Variaveis</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Variaveis SuperGlobais</h2>
    <?php
        $var = "Variavel GLOBALS <br><br>";
        echo "São variaveis pré definidas no PHP <br><br>";
        echo '$GLOBALS é uma array que contém todas as variaveis globais declaradas <br><br>';
        echo $GLOBALS['var'];
        echo '$_SERVER é uma array que contém informações do servers, são muitas voce pode ver no manual quando precisar de uma informação especifica, por exemplo, nome do server que está rodando, a porta, o ip etc.';
        echo "<br><br> Nome do server: ".$_SERVER['SERVER_NAME']."<br><br>";
        echo '$_POST e $_GET são métodos para pegar os valores enviados pelo formulario, também são tecnicamente arrays. $_POST["varname"] ou $_GET["varname"] <br> sendo o POST de maneira secreta e GET de maneira visivel';
        echo "<br><br>".$_GET['nome'];
        echo "<br><br> Por ser muita coisa para se falar, as aulas Upload de Arquivo e Sessões também são parte do Super Global"
    ?>
</body>
</html>