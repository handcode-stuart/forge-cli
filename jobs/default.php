<?php

/**
 * 1. Welcome to the Forge CLI
 * 2. List sites
 * 3. Create sites
 * 4. Delete sites
 * 5. Reboot Nginx
 * 6. Install Git repository on site
 * 7. Site info
 * 8. Deploy site
 */

/**
 * Store message
 */
$message = '';


/**
 * 1. Welcome
 */
$message .= '--- 1. Welcome to the Forge CLI ---' . PHP_EOL;
$message .= 'You can enter any of the following commands:' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 2. List sites
 */
$message .= '--- 2. List sites ---' . PHP_EOL;
$message .= '   Usage: list' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 3. Create sites
 */
$message .= '--- 3. Create sites ---' . PHP_EOL;
$message .= '   Usage: create SITE_DOMAIN PROJECT_TYPE DOMAIN' . PHP_EOL;
$message .= '       Notes:' . PHP_EOL;
$message .= '       - Available project types:' . PHP_EOL;
$message .= '           php, html, symfony, symfony_dev' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 4. Delete sites
 */
$message .= '--- 4. Delete sites ---' . PHP_EOL;
$message .= '   Usage: delete SITE_ID' . PHP_EOL;
$message .= '       Notes:' . PHP_EOL;
$message .= '       - You may input multiple site ideas separated by a space' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 5. Reboot Nginx
 */
$message .= '--- 5. Reboot Nginx ---' . PHP_EOL;
$message .= '   Usage: rebootNginx' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 6. Install Git repository on site
 */
$message .= '--- 6. Install Git repository on site ---' . PHP_EOL;
$message .= '   Usage: installGit SITE_ID REPOSITORY BRANCH' . PHP_EOL;
$message .= '       Notes:' . PHP_EOL;
$message .= '       - Branch will default to stage unless stated otherwise' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 7. Site info
 */
$message .= '--- 7. Site info ---' . PHP_EOL;
$message .= '   Usage: site SITE_ID' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * 8. Deploy site
 */
$message .= '--- 8. Deploy site ---' . PHP_EOL;
$message .= '   Usage: deploy SITE_ID' . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;


/**
 * Index
 */
$message .= '--- Index ---
1. Welcome to the Forge CLI
2. List sites
3. Create sites
4. Delete sites
5. Reboot Nginx
6. Install Git repository on site
7. Site info
8. Deploy site
';

echo $message;
