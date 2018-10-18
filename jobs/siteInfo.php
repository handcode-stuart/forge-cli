<?php

/**
 * Collect a specific site and store in the $site variable
 */
$site = $forge->site(

    /**
     * Get server ID from .env file
     */
    getenv('SERVER_ID'),

    /**
     * Get site ID argument
     */
    $argv[2]
);

/**
 * Loop through the sites key value pairs
 */
foreach ($site as $key => $value) {
    echo '      ' . $key . ' => ' . $value . PHP_EOL;
}
