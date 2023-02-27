<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <label for="num1">Número 1:</label>
            <input type="number" name="num1" required>

            <br>
            <br>

            <label for="num2">Número 2:</label>
            <input type="number" name="num2" required>

            <br>
            <br>

            <label for="operacao">Operação:</label>
            <select name="operacao">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
            </select>

            <br>
            <br>

            <input type="submit" value="Calcular"></form>
            
            <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacao = $_POST["operacao"];
        $resultado = 0;
        switch($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                if($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "Não é possível dividir por zero.";
                }
                break;
        }
    }
?>

 



    <font color='blue' size='10px'>
    <?php
    echo "Resultado: "
    ?>
    </font>

    <font color='red' size='10px'> 
    <?php
     echo $resultado 
     ?>
    </font>

</body>
</html>


