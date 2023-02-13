<?php

define("Nome", "Antony");
define("Sobrenome", "Fernando");
define("Idade", "Idade 19")

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 de PHP</title>
</head>
<body>

    <p>
        <font color='green'>
   <?php echo Nome ?> 
   <?php echo Sobrenome ?> 
   <?php echo Idade ?> 
        </font>
<br>
        <font color='red'>
        <?php echo Nome ?> 
        <?php echo Sobrenome ?> 
        <?php echo Idade ?> 
        </font>
<br>
        <font color='blue'>
        <?php echo Nome ?> 
        <?php echo Sobrenome ?> 
        <?php echo Idade ?> 
        </font>
    </p>
</body>
</html>