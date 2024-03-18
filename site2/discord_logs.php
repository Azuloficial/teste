<?php
require 'discord/vendor/autoload.php'; // Caminho para o arquivo autoload.php da biblioteca

use RestCord\DiscordClient;

// Configurações da autenticação
$token = 'MTIxODc0MjA2MjEyNDUwMzE4MQ.G150ZF.VUXczZ1pefPvYK8dSFLz-qE9tkCu5giA8CS_aU'; // Insira seu token de autenticação do Discord

// Cria uma instância do cliente Discord
$client = new DiscordClient(['token' => $token]);

// ID do canal do Discord que você deseja acessar
$channelId = '1189707922440196210';

// Número máximo de mensagens a serem recuperadas
$maxMessages = 10;

// Recupera as mensagens do canal do Discord
$messages = $client->channel->getChannelMessages(['channel.id' => $channelId, 'limit' => $maxMessages]);

// Exibe as mensagens recuperadas
foreach ($messages as $message) {
    echo "{$message->content}<br>";
}
?>
