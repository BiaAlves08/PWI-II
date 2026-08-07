<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando float em PHP</title>
</head>
<body>
    
<?php
 $a = "teste";
 $b = 12.8;

 if(is_float($a)) {
    echo "É float 1! <br>";
 }

if(is_float($b)) {
    echo "É float 2! <br>";
}

if(is_float(6565.63)) {
    echo "É float 3! <br>";
}

if(is_float("Teste")) {
    echo "É float 4! <br>";
}

/* Checando se é float:
- Função is_float(): verificar se um dado é um dado float;
- Função recebe um valor como parâmetro;
- Receberemos um true ou false, dependendo do dado enviado;
- Precisaremos utilizar uma estrutura if para validar o valor;

*/

?>

</body>
</html>