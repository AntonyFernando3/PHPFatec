<?php
$n = $_GET['n']; 
$termos = array(); 


for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $termos[] = $i;
    } else {
        $termos[] = 1;
    }
}

echo implode(', ', $termos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
    <h2>Para exibir os números coloque na URL: ?n= </h2>
</body>
</html>