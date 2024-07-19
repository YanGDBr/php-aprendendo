<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Upload de Arquivos</h2>
    <?php
     echo 'Após dar upload de um arquivo em um formulario, no php utiliza $_FILES para poder manusear os arquivos que estão no servidor<br> sendo também uma Super global <br><br> ';
    if(isset($_POST['enviado'])) {
        echo $_FILES['arquivo']['name'];
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <button type="submit" name="enviado">Enviar</button>
    </form>
</body>
</html>