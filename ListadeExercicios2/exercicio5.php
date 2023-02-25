<?php

$altura = $_GET["altura"];
$sexo = $_GET["sexo"];

define("peso_ideal_h", 72.7);
define("peso_ideal_m", 62.1);
define("fator_h", 58);
define("fator_m", 44.7);

if ($sexo == "H") {
    $peso_ideal = peso_ideal_h * $altura - fator_h;
    echo "O peso ideal para homens com altura de $altura m é de: $peso_ideal kg";
} else if ($sexo == "M") {
    $peso_ideal = peso_ideal_m * $altura - fator_m;
    echo "O peso ideal para mulheres com altura de $altura m é de: $peso_ideal kg";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <h2> Para exibir os resultado coloque na URL: ?altura=&sexo= H ou M</h2>
</body>
</html>