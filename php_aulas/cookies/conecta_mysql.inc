<?php 
//configurações do banco de dados

$servidor = "localhost"; /Acesso local, conexão interna para testes
$usuario_bd = "cookiesteste";
$senha_bd = "NS_Ci-lFZ@dHN2TS";
$banco = "cookies"; //Nome do banco de dados

$conexao = new mysqlli($servidor, $usuario_bd, $senha_bd, $banco)
?>