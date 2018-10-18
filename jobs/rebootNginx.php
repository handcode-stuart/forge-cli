<?php

/**
 * Run the forge rebootNginx method on a
 * targetted server
 */
$forge->server(getenv('SERVER_ID'))->rebootNginx();
