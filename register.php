<?php

// PARAMETRI DA MODIFICARE
$WEBHOOK_URL = 'https://ivaddebot.herokuapp.com/execute.php';
$BOT_TOKEN = '{311910113:AAE_lKq2FO4hZM2yOj6-lqNtpOJGOtIEi7Y}';

// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
$method = 'setWebhook';
$parameters = array('url' => $WEBHOOK_URL);
$url = $API_URL . $method. '?' . http_build_query($parameters);
$handle = curl_init($url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($handle, CURLOPT_TIMEOUT, 60);
$result = curl_exec($handle);
print_r($result);
