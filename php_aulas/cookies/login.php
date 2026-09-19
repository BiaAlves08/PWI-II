<?php
// obtém os valores digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

include "conecta_mysql.inc";

//Escapa os caracteres especiais, para evitar ataques de SQL Injection
$email = $conexao->real_escape_string($email);
$senha = $conexao->real_escape_string($senha);

//Acesso ao banco de dados
$resultado = $conexao->query("SELECT * FROM usuarios WHERE email='$email'");
$linhas = $resultado->num_rows;
if($linhas==0) //Testa se a consulta retornou algum registro 
{
    echo "<html><body>";
    echo "<p align=\"center\">E-mail não encontrado!</p>";
    echo "<p align=\"center\"><a href=\login.html\">Voltar</a></p>";
    echo "</body></html>";

}
else {
$dados = $resultado->fetch_array();
$senha_banco = $dados["senha"];

if($senha != $senha_banco) // Confere senha
{
    echo "<html><body>";
    echo "<p align=\"center\"> A senha está incorreta!</p>";
    echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
    echo "</body></html>";
}

else //Usuário e senha corretos. Vamos criar os cookies
{

    setcookies("email_usuario", $email);
    setcookies("senha_usuario", $senha);
    //Direciona para a página inicial dos usuários cadastrados
    header ("Location: index.php");
}  
}

$conexao->close();
?>