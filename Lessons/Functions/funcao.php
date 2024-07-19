<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body style="font-family: sans-serif;">
    <h2>Funções</h2>
    <?php
        function printar($texto){
            echo $texto;
        }
        echo "Utilizar function para iniciar uma função <br><br>";
        printar("essa é uma função <br><br>");
        function media($nota1, $nota2, $nota3, $nota4){
            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
            if($media >=7){
                echo "Aprovado";
            }
            else {
                echo "Reprovado";
            }
        }
        media(5, 8, 9, 7);
    ?>
</body>
</html>