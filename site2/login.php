<?php
session_start();

// Defina suas credenciais de usuário e senha aqui
$usuario_correto = "fox";
$senha_correta = "123";

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o nome de usuário e senha estão corretos
    if ($_POST['username'] == $usuario_correto && $_POST['password'] == $senha_correta) {
        // Autenticação bem-sucedida, salva o usuário na sessão
        $_SESSION['discord_user'] = $_POST['username'];
        // Redireciona para a página principal
        header("Location: pagina_principal.php");
        exit();
    } else {
        // Se as credenciais estiverem incorretas, exibe uma mensagem de erro
        $error = "Nome de usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Faça login</h2>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>
    <form method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
