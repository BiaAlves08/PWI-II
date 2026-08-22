<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Float</title>
</head>
<body>
    
<?php

echo 4.15;
echo "<br>";
echo 12.12;
echo "<br>";

$c = -78.1;

echo $c;
echo "<br>";

if(is_float($c)) {
    echo "Sim, podemos ter floats negativos!";
}

if(is_int($c)) {
    echo "É um inteiro";
}
?>

</body>
</html>