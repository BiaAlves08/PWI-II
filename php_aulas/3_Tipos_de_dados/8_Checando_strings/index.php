 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem de String em PHP</title>
 </head>
 <body>
    
 <?php
/* Checando se é uma string
Podemos utilizar a função is_string() para verificar se um dado é uma string;
A função recebe um valor como parâmetro;
Novamente receberemos true or false, dependendo dos dados enviados;
Sempre precisamos utilizar a estrutura IF para validar o valor;
*/

$str = "JULIANA";
$num = 12;

if(is_string($str)) {
    echo "$str é uma string 1 <br>";
}

if(is_string($num)) {
    echo "$num é uma string 2 <br>";
}

if(is_string("asd")) {
    echo "É uma string 3 <br>";
}

?>


 </body>
 </html>