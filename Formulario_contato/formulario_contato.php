<?php
/**
 * Formulário de contato em PHP
 * - Validação dos dados no servidor
 * - Exibe mensagens de erro / sucesso
 * - Preenche novamente os campos em caso de erro
 */

// Variáveis
$erros = [];
$sucesso = false;

// Valores padrão (mantém o que o usuário digitou em caso de erro)
$nome = '';
$email = '';
$assunto = '';
$mensagem = '';


if ($_SERVER['REQUEST_METHOD']==='POST'){

//Captura e sanitiza os dados enviados 
$nome = trim($_POST['nome']??'');
$email = trim($_POST['email']??'');
$assunto = trim($_POST['assunto']??'');
$mensagem = trim($_POST['mensagem']??'');

//--- Validações ---
if(empty($nome)) {
    $erros['nome'] = 'O campo nome é obrigatório.';
} 

elseif(strlen($nome)< 3) {
    $erros['nome'] = 'O nome deve ter pelo menos 3 caracteres.';
}

if(empty($email)) {
    $erros['email'] = 'O campo email é obrigatório.';
} 

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $erros['email'] = 'Informe um e-mail válido.';
}

if(empty($assunto)) {
    $erros['assunto'] = 'O campo assunto é obrigatório.';
} 

if(empty($mensagem)) {
    $erros['mensagem'] = 'O campo mensagem é obrigatório.';
} 

elseif(strlen($mensagem) < 10) {
    $erros['mensagem'] = 'A mensagem deve ter pelo menos 10 caracteres.';
}
//Se não houver erros, processo o envio
if(empty($erros)){

// Sanitiza antes de usar(ex: salvar em banco, enviar e-mail, etc.)
$nome_limpo = htmlspecialchars($nome, ENT_QUOTES< 'UTF_8');
$email_sujo = filter_var($email, FILTER_SANITIZE_EMAIL);
$assunto_limpo = htmlspecialchars($assunto, ENT_QUOTES, 'UTF-8');
$mensagem_limpo = htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8');

/**
 * Exemplo de envio por e-mail (requer servidor configurado com SMTP/email());
 * 
 * $destinatario = "seuemail@exemplo.com";
 * $cabecalhos = "From = $email_limpo";
 * $corpo = "Nome: $nome_limpo\n\nMensagem:\n$mensagem_limpa";
 * mail($destinatario, $assunto_limpo, $corpo, $cabecalhos);
 * 
 * Você também pode salvar em um banco de dados usando PDO, por exemplo.
 * 
 */
$sucesso = true;

// Limpa os campos após sucesso
$nome = $email = $assunto = $mensagem = '';
}
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de contato</title>
    <style>
        * {box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #fff;
            width: 100%;
            max-width: 480px;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 16px #000;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 24px;
            color: #222;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 14px;
            
        }
    </style>
</head>
<body>
    
</body>
</html>