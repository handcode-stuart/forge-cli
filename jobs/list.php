<?php

$sites = $forge->sites(getenv('SERVER_ID'));

foreach ($sites as $site) {
    echo $site->name . " ({$site->id})" . PHP_EOL;
}
