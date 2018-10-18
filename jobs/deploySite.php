<?php

/**
 * Use the forge deploySite method
 */
$forge->deploySite(

    /**
     * Get server ID from .env file
     */
    getenv('SERVER_ID'),

    /**
     * Get site ID argument
     */
    $argv[2]
);
