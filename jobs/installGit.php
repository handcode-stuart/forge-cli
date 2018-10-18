<?php

$forge->installGitRepositoryOnSite(
    getenv('SERVER_ID'),
    $argv[2],
    array(
        "provider" => "gitlab",
        "repository" => $argv[3],
        "branch" => $argv[4] ? $argv[4] : 'stage'
    )
);
