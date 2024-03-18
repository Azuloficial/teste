<?php
session_start();
// Verifica se o usuário está autenticado, se não estiver, redireciona para a página de login
if (!isset($_SESSION['discord_user'])) {
    header('Location: login.php');
    exit();
}

// Função para enviar uma mensagem para a webhook do Discord
function enviarMensagemWebhook($webhookURL, $mensagem) {
    $data = array('content' => $mensagem);
    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($webhookURL, false, $context);
    if ($result === FALSE) {
        // Se houver um erro ao enviar a mensagem para a webhook
        return false;
    }
    return true;
}

// Enviar uma mensagem para a webhook
$webhookURL = "https://discord.com/api/webhooks/1218735679207374976/73tY0zE86PEgzAGe-ioU7Tmsx9xcobUQv6ECNkykQLO-yJsU2QxPaBfAglGyBMGgBWnV";
$mensagem = "Esta é uma mensagem de teste enviada para a webhook do Discord.";
if (enviarMensagemWebhook($webhookURL, $mensagem)) {
    echo "<p>Mensagem enviada com sucesso para a webhook!</p>";
} else {
    echo "<p>Erro ao enviar mensagem para a webhook!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>havana</title>
</head>
<body>
    <h1>Logs e Webhooks</h1>
    <p>Aqui estão as logs e webhooks do seu servidor:</p>
    <!-- Insira aqui o código para exibir as logs e webhooks -->
</body>
</html>
