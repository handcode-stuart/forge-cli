<?php

/**
 * Store all sites from a server into the $sites variable
 */
$sites = $forge->sites(getenv('SERVER_ID'));

/**
 * Loop through each site
 */
foreach ($sites as $site) {

    /**
     * Echo out each sites name and ID
     */
    echo $site->name . " ({$site->id})" . PHP_EOL;
}
