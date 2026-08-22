<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
/**
 * Script de Checagem e Validação de Strings em PHP
 * 
 * Este arquivo demonstra diversas funções nativas e técnicas recomendadas 
 * para verificar, validar e manipular strings em PHP.
 */

// 1. STRING DE EXEMPLO PARA OS TESTES
$texto = "  Olá, Bem-vindo ao Desenvolvimento Web com PHP!  ";
$email = "usuario@empresa.com.br";
$senha = "Senha@123";

echo "<h1>Exemplos de Checagem de Strings em PHP</h1>";

// ============================================================================
// 2. VERIFICAÇÃO DE ESTADO (Vazia, Nula ou Espaços)
// ============================================================================
echo "<h2>1. Verificação de Estado (Vazia ou Preenchida)</h2>";

// trim() remove espaços em branco no início e no fim
$textoLimpo = trim($texto);

if (empty($textoLimpo)) {
    echo "<p>A string está vazia ou contém apenas espaços.</p>";
} else {
    echo "<p>A string está preenchida: <strong>'$textoLimpo'</strong></p>";
}

// ============================================================================
// 3. TAMANHO E COMPRIMENTO DA STRING
// ============================================================================
echo "<h2>2. Comprimento da String</h2>";

// mb_strlen() é recomendado para strings com acentos/caracteres UTF-8
$tamanhoBytes = strlen($textoLimpo);
$tamanhoCaracteres = mb_strlen($textoLimpo, 'UTF-8');

echo "<p>Tamanho em bytes (strlen): $tamanhoBytes</p>";
echo "<p>Tamanho em caracteres (mb_strlen): $tamanhoCaracteres</p>";

// Validando tamanho mínimo
if (mb_strlen($textoLimpo) >= 10) {
    echo "<p>✓ O texto atende ao tamanho mínimo de 10 caracteres.</p>";
}

// ============================================================================
// 4. BUSCA E VERIFICAÇÃO DE CONTEÚDO (PHP 8+)
// ============================================================================
echo "<h2>3. Busca e Presença de Substrings</h2>";

// str_contains(): Verifica se uma palavra/termo existe na string
if (str_contains($textoLimpo, "PHP")) {
    echo "<p>✓ O termo 'PHP' foi encontrado na string.</p>";
}

// str_starts_with(): Verifica se a string começa com determinado termo
if (str_starts_with($textoLimpo, "Olá")) {
    echo "<p>✓ A string começa com 'Olá'.</p>";
}

// str_ends_with(): Verifica se a string termina com determinado termo
if (str_ends_with($textoLimpo, "!")) {
    echo "<p>✓ A string termina com exclamação '!'.</p>";
}

// strpos(): Encontra a posição numérica de um termo (retorna false se não encontrar)
$posicao = strpos($textoLimpo, "Desenvolvimento");
if ($posicao !== false) {
    echo "<p>A palavra 'Desenvolvimento' inicia na posição: $posicao</p>";
}

// ============================================================================
// 5. VALIDAÇÃO DE FORMATOS ESPECÍFICOS (E-mail, URL, etc.)
// ============================================================================
echo "<h2>4. Validação de Formatos Nativa</h2>";

// filter_var(): Método nativo seguro para validação de e-mails, URLs e IP
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>✓ O e-mail '$email' possui um formato válido.</p>";
} else {
    echo "<p>✗ O e-mail informado é inválido.</p>";
}

// ============================================================================
// 6. VALIDAÇÃO AVANÇADA COM EXPRESSÕES REGULARES (Regex)
// ============================================================================
echo "<h2>5. Checagem Avançada com Regex (preg_match)</h2>";

/*
 * Regra da Senha abaixo:
 * - Pelo menos 8 caracteres
 * - Pelo menos uma letra maiúscula
 * - Pelo menos uma letra minúscula
 * - Pelo menos um número
 * - Pelo menos um caractere especial (@$!%*?&)
 */
$padraoSenha = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

if (preg_match($padraoSenha, $senha)) {
    echo "<p>✓ A senha atende a todos os requisitos de segurança.</p>";
} else {
    echo "<p>✗ A senha é fraca. Deve conter letras maiúsculas, minúsculas, números e caracteres especiais.</p>";
}

// Checking if string contains only numbers/digits
$apenasNumeros = "123456";
if (ctype_digit($apenasNumeros)) {
    echo "<p>✓ A string '$apenasNumeros' contém apenas dígitos numéricos.</p>";
}

// ============================================================================
// 7. HIGIENIZAÇÃO / SEGURANÇA (Prevenção de XSS)
// ============================================================================
echo "<h2>6. Higienização para Exibição Segura em HTML</h2>";

$inputUsuario = "<script>alert('Ataque XSS!');</script><b>Texto em negrito</b>";

// htmlspecialchars() converte caracteres especiais em entidades HTML seguras
$textoSeguro = htmlspecialchars($inputUsuario, ENT_QUOTES, 'UTF-8');

echo "<p>Texto original bruto (perigoso): " . strip_tags($inputUsuario) . "</p>";
echo "<p>Texto codificado em HTML (seguro): <code>$textoSeguro</code></p>";

/*
O que este arquivo abrange:

Limpeza e Checagem de Estado:

Utiliza trim() e empty() para garantir que a string não contenha apenas espaços em branco ou esteja vazia.

Comprimento da String:

Compara strlen() com mb_strlen(), destacando o uso recomendado de mb_strlen() para tratar corretamente caracteres com acentuação e UTF-8.

Busca e Presença de Substrings (PHP 8+):

Utiliza funções modernas e legíveis como str_contains(), str_starts_with() e str_ends_with(), além do clássico strpos().

Validação de Formatos Nativa:

Exemplo prático de validação de e-mail utilizando filter_var() com FILTER_VALIDATE_EMAIL.

Validação Avançada com Expressões Regulares (Regex):

Demonstração de validação de complexidade de senha com preg_match() e checagem de dígitos numéricos com ctype_digit().

Segurança e Higienização (Anti-XSS):

Uso do htmlspecialchars() para tratar entradas de usuários antes de exibi-las na página web.



*/

?>


    
</body>
</html>