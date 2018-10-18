<?php

$message = '';
$message .= 'Welcome to the Forge CLI.' . PHP_EOL;
$message .= 'You can enter any of the following commands:' . PHP_EOL . PHP_EOL;
$message .= '--- List sites ---' . PHP_EOL;
$message .= '   Usage: list' . PHP_EOL . PHP_EOL;
$message .= '--- Create sites ---' . PHP_EOL;
$message .= '   Usage: create SITE_DOMAIN PROJECT_TYPE DOMAIN' . PHP_EOL;
$message .= '       Notes:' . PHP_EOL;
$message .= '       - Available project types:' . PHP_EOL;
$message .= '           php, html, symfony, symfony_dev' . PHP_EOL . PHP_EOL;
$message .= '--- Delete sites ---' . PHP_EOL;
$message .= '   Usage: delete SITE_ID' . PHP_EOL;
$message .= '       Notes:' . PHP_EOL;
$message .= '       - You may input multiple site ideas separated by a space' . PHP_EOL . PHP_EOL;
$message .= '--- Reboot Nginx ---' . PHP_EOL;
$message .= '   Usage: rebootNginx' . PHP_EOL . PHP_EOL;

echo $message;
