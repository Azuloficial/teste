<?php
session_start();

// Verifica se o usuário está autenticado, se não estiver, redireciona para a página de login
if (!isset($_SESSION['discord_user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Bem-vindo à Página Principal</h1>
    <p>Esta é a página principal do seu site após o login.</p>
    <p><a href="logs_e_webhooks.php">Ir para Página de Logs e Webhooks</a></p>
</body>
</html>
