<?php

$fat = 1;
$cont = 1;

do {
    $num = $_GET['num'];
      for( $i=1; $i<=$num; $i++) {
          $fat = $fat * $i; 
    }

    echo "Número Digitado e Lido: " .$num. "<br>";
    echo "!" .$num. " = " .$fat;

    $cont++;
}
    while( $cont < 2);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <h2>Para exibir os valores, digite na URL: ?num=</h2>
</body>
</html>