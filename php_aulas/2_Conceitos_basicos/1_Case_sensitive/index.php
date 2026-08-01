<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitive em PHP</title>
</head>
<body>
    <?php 
    //Não é case sensitive 
    echo "Teste <br>";
    Echo "Testando 2 <br>";
    ECHO "Testando 3 <br>";
    
    // É case sensitive
    $nome = "Bianca Santos";
    $NOME = "TESTE";

    echo $nome;
    echo "<br>";
    echo $NOME;
    echo "<br>";

    /*Case sensitive
    - Significa sensibilidade a casas maiúsculas e minúsculas;
    - Para instruções PHP não temos essa diferença, ou seja: echo = ECHO;
    - Porém para variáveis são case sensitive;
    - Ou seja, $nome != $NOME;
    - Obs: Veremos variáveis em detalhes mais adiante; */
    
    ?>

</body>
</html>