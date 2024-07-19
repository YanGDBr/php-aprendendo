<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fundamentos Básicos</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .borda {
            border: 1px solid black;
            width: 10vw;
            height: 8vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        #corpo {
            width: 100vw;
            height: 80vh;
            display: flex;
            flex-direction: row;
            gap: 2px;
            flex-wrap: wrap;
        }
    </style>
</head>

<body style="font-family: sans-serif">
    <?php

    echo "<h1>Aprendendo</h1>";
    ?>
    <div id="corpo">
        <div class="borda" style="margin-left: 2px;">
            <a href="criarvirtual.php">Como criar Virtual Hosts no WAMMP</a>
    
        </div>
        
        <div class="borda">
            <a href="Lessons/Vars/variaveis.php">Variaveis </a>
    
        </div>
        <div class="borda">
            <a href="Lessons/Data Type/tipo_dados.php">Tipo de Dados </a>
    
        </div>
        <div class="borda">
            <a href="Lessons/Concact/concact.php">Concatenação </a>
    
        </div>
        <div class="borda">
    
            <a href="Lessons/Scopes/escopos.php">Escopos </a>
        </div>
        <div class="borda">
            <a href="Lessons/Const/constantes.php">Constantes </a>
    
        </div>
        <div class="borda">
    
            <a href="Lessons/Arrays/arrays.php">Arrays </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Conditionals/condicionais.php">Condicionais </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Operators/operadores.php">Operadores Aritméticos </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Repetition Structure/repeticao.php">Estrutura de Repetição </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/String and Number Functions/strings.php">Funções de Strings e Numeros </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Functions/funcao.php">Funções </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Superglobal/superglobais.php?nome=Yan">Variaveis Superglobais </a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Filters/filtros.php?variavel=13">Filtros de Validação e Limpeza</a>
        </div>
        <div class="borda">
    
            <a href="Lessons/Files/arquivos.php">Upload de Arquivos</a>
        </div>
        
        <div class="borda">
    
            <a href="Lessons/Sessions/session.php">Sessões</a>
        </div>

    </div>



</body>

</html>