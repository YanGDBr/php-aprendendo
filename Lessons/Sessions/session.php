<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <h2>Sessões</h2>
    <?php
        echo "Para ser mais fácil de explicar, sessões seriam tipo variaveis que podem ser chamadas em outros arquivos, e para acessar essas sessões voce primeiro tem que startar<br><br>";
        if(isset($_POST['clicado'])) {
            session_start();
            $_SESSION['variavel'] = $_POST['texto'];
        }
        echo "<br><br> A sessão se destrói quando o navegador é fechado, formatando todos os valores que nela tava armazenada, porém é possivel destruir manualmente com session_destroy e limpar com session_unset<br><br>";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="texto">
        <button type="submit" name="clicado">Enviar</button>
    </form>

    <a href="sessiontest.php">Ir para outra pagina</a>
</body>
</html>