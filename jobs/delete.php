<?php

/**
 * Start for loop incase more than one site ID is
 * passed to the script
 */
for ($i=2; $i < count($argv); $i++) {

    /**
     * Use the forge deleteSite method
     */
    $forge->deleteSite(

        /**
         * Get server ID from .env file
         */
        getenv('SERVER_ID'),

        /**
         * Get each site ID from the loop
         */
        $argv[$i]
    );
}
