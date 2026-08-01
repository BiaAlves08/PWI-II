<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço em branco no PHP</title>
</head>
<body>
    
<?php

/* Espaços em branco:
- Para interpretação do código em PHP o espaço em branco é ignorado;
- Isso acontece pois o mesmo é rmeovido antes da execução;
- A quebra de linha também é ignorada;
- Porém se utilizada de má forma pode gerar erros inesperados no código. */

echo                                  "Testando espaços em branco <br>";

echo "testando espaço <br>";

echo 
"Quebra de linha <br>";

echo 
"Quebra de 
linha <br>";
?>


</body>
</html>