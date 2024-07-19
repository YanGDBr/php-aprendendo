<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo Dados</title>
</head>
<body style="width: 100vw; height: 100vh; display: flex; justify-content: space-around; margin: 0; padding: 0; font-family: sans-serif">
    <div style="width: 20%; height: 100%">
        <?php 
        echo "<h2>Tipo de Dados:</h2>";
        
        echo "<h3>String</h3>";
        $texto = "Texto top";
        var_dump($texto);
    
    
        echo "<h3>Int</h3>";
        $numero = 89;
        $numeroneg = -109;
        var_dump($numero);
        var_dump($numeroneg);
    
    
    
        echo "<h3>Float</h3>";
        $float = 19.9;
        var_dump($float);
    
    
        echo "<h3>Boolean</h3>";
        $verdade = true;
        $falso = false;
        var_dump($verdade);
        var_dump($falso);
        ?>
    </div>
    <div style="width: 20%; height: 100%">
        <?php 
             echo "<h2>COMPOSTOS</h2>";
             echo "<h3>Array</h3>";
             $lista = array("Oi", 89, true);
             var_dump($lista);
         
         
             echo "<h3>Object</h3>";
             class Pessoa {
                 public $id;
                 public function adicionarId($id) {
                     $this->id = $id;
                 }
             }
             $pessoa = new Pessoa();
             $pessoa->adicionarId("785.983-90");
             var_dump($pessoa);
             
             echo "<h2>ESPECIAIS</h2>";
             echo "<h3>NULL</h3>";
             $especial = null;
             var_dump($especial);

             echo "<h3>RESOURCE</h3>";
        ?>
    </div>
</body>
</html>