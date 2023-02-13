<?php
define("valor1", 2);
define("valor2", 4);
define("valor3", 6);
define("valor4", 8);

$media = (valor1 + valor2 + valor3 + valor4) / 4;
$mediapon = (valor1*1 + valor2*2 + valor2*2 + valor3*3 + valor4*4 ) / (1+2+3+4);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 de PHP</title>
</head>
<body>
    <font color='#7cfc00'>
   <?php echo $media ?>
    </font>
<br>
    <font color='#008b8b'>
   <?php echo $mediapon ?>
    </font>
</body>
</html>