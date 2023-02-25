<?php
    $num = $_GET['num'];
    $ultimo=1;
    $penultimo=0;
    
  echo "0 <br/> 1 <br/>";
  for($count=1; $count<=$num-2; $count++){
   $atual = $ultimo + $penultimo;
   echo $atual."<br/>";
   
   $penultimo = $ultimo;
   $ultimo = $atual;
  } 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    
</body>
</html>