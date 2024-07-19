<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body style="width: 100vw; height: 100vh; display: flex; justify-content: space-around; margin: 0; padding: 0; font-family: sans-serif">
    <div style="width: 20%; height: 100%">

        <?php 
        echo "<h2>Arrays</h2>";
        $comida = array("Maça", "Banana", "Sorvete");
        echo 'Criar arrays utilizando a função array() ou com conchetes []. ex: $variavel = []<br><br> Para exibir um array completamente, utilizar print_r invés de echo<br><br>';
        print_r($comida);
        echo '<br><br> Abrir conchetes para pegar indices especificos -> $array[index]<br><br>';
        echo 'Para definir um indice especifico para um elemento no array: indice=>valor, ex: 3=>"algo"<br><br>';
        $carros = array(1=>"Hilux", 2=>"Lamborghini", 3=>"BMW", 87=>"Lamosine");
        echo "Carro qualquer: $carros[87]<br><br>";
        echo 'Para adicionar elementos no array: $array[] = valor. sem especificar um indice ele adiciona por ultimo, se quiser especificar só colocar o indice<br><br>';
        $carros[] = "Ferrari";
        $carros[100] = "Camaro";
        print_r($carros);
        ?>
    </div>
    <div style="width: 20%; height: 100%">
        <?php
        $pessoa = array("nome" => "João", "idade" => 50, "altura" => 1.70, );
        echo "<h2>Array Associativo</h2>";
        echo 'São arrays que o indice é um texto<br>';
        $pessoa['nome'] = "José";
        foreach($pessoa as $indice => $valor){
            echo "$indice: $valor<br>";
        }
        echo "<h2>Array Multidimensionais</h2>";
        echo "São varios arrays dentro de um array<br>";
        $pessoas = array("José" => array("CPF" => "214141432"), "Joao" => array("CPF" => "21534432"), "Yan" => array("CPF" => "2634341432"));
        foreach($pessoas as $indice => $valor){
            echo "$indice: <br>";

            foreach($valor as $index => $valordovalor){
                echo $index.":".$valordovalor."<br>";
            }
        }
        
        ?>
    </div>
    <div style="width: 20%; height: 100%">
        <?php
        $carros = array(1=>"Hilux", 2=>"Lamborghini", 3=>"BMW", 87=>"Lamosine");
        echo "<h2>Funções de Array</h2>";
        echo "Pegar o valor do tamanho de um array: count()<br><br>";
        echo "Tamanho da array carros: ".count($carros);
        echo "<br><br> foreach(), é uma função básica de pegar um por vez cada valor de uma array: <br>";
        foreach($carros as $elemento) {
            echo "$elemento <br>";
        }
        echo "Com indice:<br>";
        foreach($carros as $indice => $elemento) {
            echo "$indice.$elemento <br>";
        }
        

        ?>
    </div>
    <div style="width: 20%; height: 100%">
    <?php
        echo "<h2> Mais Funções </h2>";
        echo "Algumas funções breviamente explicadas: <br><br>";
        echo "in_array(valor, array): verifica se tem tal valor em um array returna boolean <br><br>";
        echo "array_keys(array) retorna uma nova array com todos os INDICES da array especificada<br><br>";
        echo "array_values(array) retorna uma nova array com todos os VALORES da array especificada<br><br>";
        echo "array_merge(array1, array2) junta dois arrays<br><br>";
        echo "array_pop(array) exclui a ultima posição<br><br>";
        echo "array_shift(array) exclui a primeira posição<br><br>";
        echo "array_unshift(array, valores) adiciona valores no inicio da array<br><br>";
        echo "array_push(array, valores) adiciona valores no fim da array<br><br>";
        echo "array_combine(arrayIndices, arrayValores) mescla arrays com indices e valores<br><br>";
        echo "explode(identicador, array) transforma uma string em um array<br><br>";
        echo "implode(divisor, array) transforma uma array em uma string<br><br>";
    ?>
    </div>
</body>
</html>