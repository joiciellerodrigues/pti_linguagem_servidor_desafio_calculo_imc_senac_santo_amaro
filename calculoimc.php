<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice de Massa Corporal</title>
</head>
<body>
    <?php
        $peso=$_POST['peso'];
        $altura=$_POST['altura'];
        $imc=$peso/pow($altura,2);
        
        if($imc < 18.5){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-enter'>Você está classificado com nível de Magreza </h3>";
        }
        else if ($imc >= 18.5 and $imc < 24.9){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-enter'>Você está no peso ideal</h3>";
        }
        else if($imc >= 25.0 and $imc < 29.9){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-enter'>Você está classificado com nível de Sobrepeso</h3>";
        }
        else if($imc >= 30.0 and $imc < 34.9 ){
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-enter'>Você está classificado com nível de Obesidade Grau I</h3>";
        }
        else if($imc >= 35.0 and $imc < 39.9) {
            echo "<input type='text' class='form-control col-6 mx-auto' value=".$imc.">";
            echo "<h3 class='text-enter'>Você está classificado com nível de Obesidade Grau II</h3>";
        }
       
    ?>
</body>
</html>