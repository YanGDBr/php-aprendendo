<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Estruturas de Repetições</h2>
    <?php
    echo "While e Do While<br>";
    $var = 10;
    while($var > 0){
        echo $var."<br>";
        $var--;
    }
    do {
        echo "Do While executa pelo menos uma vez<br>";
    } while ($var > 0);

    echo "For<br>";
    for($i = 0; $i < 10; $i++){
        echo $i."<br>";
    };

    ?>
</body>
</html>