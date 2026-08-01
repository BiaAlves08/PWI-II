<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando números inteiros em PHP</title>
</head>
<body>
    
<?php

if(is_int(5)) { //verdadeiro
    echo "É um número inteiro";
}

if(is_int("Não é um inteiro")) { //falso
    echo "É um inteiro 2 <br>";
}

$a = 10;

if(is_int($a)) {
    echo "É um inteiro 3 <br>";
}

/* Checando números inteiros 
Validar números inteiros com a função is_int();
Se o número for inteiro = true (tipo de dado);
Se não for inteiro = false (tipo de dado);
Precisa utilizar o IF para validar o valor; */

?>

</body>
</html>