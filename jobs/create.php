<?php

$domain = $argv[2];
$type = $argv[3];
$directory = $argv[4];

$forge->createSite(
    getenv('SERVER_ID'),
    array(
        'domain' => $domain,
        'project_type' => $type,
        'directory' => $directory
    ),
    false
);
