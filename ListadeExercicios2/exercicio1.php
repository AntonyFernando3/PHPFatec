<?php
  $numero = $_GET['num'];

  for ($i = 1; $i <= 100; $i++) {
    $resultado = $numero * $i;
    echo $numero." x ".$i." = ".$resultado."<br>";
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>

    <br>
    <h1> Para exibir a tabuada, digite no final da URL: ?num="numero" sem as aspas</h1>
</head>
<body>
    
</body>
</html>
