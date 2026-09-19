<?php 
//configurações do banco de dados

$servidor = "localhost"; /Acesso local, conexão interna para testes
$usuario_bd = "root";
$senha_bd = "Yi6*.!CLR-Ntl*(p";
$banco = "cookies"; //Nome do banco de dados

$conexao = new mysqlli($servidor, $usuario_bd, $senha_bd, $banco)
?>