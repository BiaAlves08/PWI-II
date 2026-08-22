<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAYS(Conjunto, lista) em PHP</title>
</head>
<body>
    
<?php
/*ARRAYS CONJUNTO LISTA
O array é um tipo de dado que serve para agrupar um conjunto de valores;
Podemos inserir qualquer tipo de dado na lista;
A sintaxe é: [1, 2, 3, 4, 5];
Sempre entre [ ], dados separaos por ,
Veremos arrays em mais detalhes futuramente, é uma
estrutura de dados muito importante e muito utilizada;
*/

$a = [1,2,3];

print_r($a);
echo "<br>";
echo $a[0];

$arr=["André", 1069, true];

echo "<br>";
print_r($arr); // Função que imprime em forma de lista (informações das variáveis)
echo "<br>";
print_r($arr[1]);
?>

</body>
</html>