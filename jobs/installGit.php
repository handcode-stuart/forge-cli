<?php

/**
 * Use the forge installGitRepositoryOnSite method
 */
$forge->installGitRepositoryOnSite(

    /**
     * Get server ID from .env file
     */
    getenv('SERVER_ID'),

    /**
     * Get site ID argument
     */
    $argv[2],

    /**
     * Pass Git repository info into an array
     */
    array(
        "provider" => "gitlab",
        "repository" => $argv[3],
        "branch" => $argv[4] ? $argv[4] : 'stage'
    )
);
