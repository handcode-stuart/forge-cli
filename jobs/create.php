<?php

/**
 * First argument = Domain
 */
$domain = $argv[2];

/**
 * Second argument = Project type
 */
$type = $argv[3];

/**
 * Third argument = Directory
 */
$directory = $argv[4];

/**
 * Use the forge createSite method
 */
$forge->createSite(

    /**
     * Get server ID from .env file
     */
    getenv('SERVER_ID'),

    /**
     * Pass arguments into an array
     */
    array(
        'domain' => $domain,
        'project_type' => $type,
        'directory' => $directory
    ),
    false
);
