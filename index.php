<?php

require_once(__DIR__ . '/vendor/autoload.php');
(new \Dotenv\Dotenv(__DIR__))->load();

$forge = new Themsaid\Forge\Forge(getenv('API_KEY'));

$action = $argv[1];

switch ($action) {
    case 'create':
    case '-c':
    include(__DIR__.'/jobs/create.php');
    break;

    case 'delete':
    case '-d':
    include(__DIR__.'/jobs/delete.php');
    break;

    case 'list':
    case '-l':
    include(__DIR__.'/jobs/list.php');
    break;

    case 'rebootNginx':
    case '-rn':
    include(__DIR__.'/jobs/rebootNginx.php');
    break;

    default:
    include(__DIR__.'/jobs/default.php');
    break;
}
