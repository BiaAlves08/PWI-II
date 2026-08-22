<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checando booleanos em PHP</title>
</head>
<body>
    
<?php
/*Checando se é booleano
Em PHP, existem duas abordagens principais para verificar se um valor é booleano 
(true or false), dependendo se você deseja verificar o tipo primitivo 
ou se aceita strings/números que representam booleanos (como "true", "1", 0).

1. Checagem Estrita de Tipo (is_bool)
A função nativa is_bool() verifica se a variável é estritamente do tipo booleano (true ou false).

2. Checagem Flexível de Formato(filter_var)
Se você recebe dados vindos de formulários HTML ou APIs, 
o valor pode vir como string("true", "false", "1", "0"). Nesses casos, o is_bool()
retornará false.
Para validar e converter esses casos, use filter_var() com a flag 
FILTER_VALIDATE_BOOLEAN.

<?php
$entrada1 = "true";
$entrada2 = "1";
$entrada3 = "Texto_qualquer";

// O parâmetro FILTER_NULL_ON_FAILURE faz a função retornar NULL se não for um booleano;

$resultado1 = filter_var($entrada1, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
$resultado2 = filter_var($entrada2, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
$resultado3 = filter_var($entrada3, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

var_dump($resultado1); // bool(true)
var_dump($resultado2); // bool(true)
var_dump($resultado3); // NULL (não é considerado booleano)

?>
*/
/* Primeiro*/
$status = true;
$ativo = false;
$texto = "true";
$numero = 1;

//Retorna true (é booleano)
var_dump(is_bool($status));
var_dump(is_bool($ativo));

//Retorna false(não são booleanos primitivos)
var_dump(is_bool($texto));
var_dump(is_bool($numero));
?>

</body>
</html>