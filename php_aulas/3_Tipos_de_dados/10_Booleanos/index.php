<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleanos em PHP</title>
</head>
<body>
    
<?php

/*Booleanos
O boolean é um tipo de dado que possui dois valores;
TRUE = Verdadeiro
False = Falso
Alguns valores são considerados como falsos; 0,0.0 , 
"0", [], NULL
*/

echo true;
echo "<br>";
echo false;

if(true) {
    echo "É verdadeiro! <br>";
}

if(5>2) { // true
echo "É verdadeiro! <br>";
}

$podeEntrar = true;

if($podeEntrar) {
    echo "O usuário pode entrar";
}


?>


</body>
</html>