<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body style="font-family: sans-serif;">
    <?php
        echo "<h2>Condicionais</h2>";
        echo " Como utilizar condicionais ( IF, ELSE, ELSEIF, ENDIF ) no PHP <br><br>";
        $numero = 25;
        if($numero == 25){
            echo 'o numero é igual a 25';
        }
        elseif($numero >= 10){
            echo 'o numero é maior ou igual a 10';
            
        }
        else {
            echo 'o numero é abaixo de 10';
        }
        echo "<br><br>Pode se utilizar o alternativo invés de chaves na hora do escopo. utilizar : <br> mas dai tem que finalizar utilizando endif, endforeach etc...";

        echo "<br><br> Switch case: <br>";
        switch($numero){
            case 25: {
                echo "Novamente o numero é 25";
                break;
            }
            default: {
                echo "Não é o 25";
                break;
            }
        }
    ?>
    
</body>
</html>