<?php

$site = $forge->site(getenv('SERVER_ID'), $argv[2]);

foreach ($site as $key => $value) {
    echo '      ' . $key . ' => ' . $value . PHP_EOL;
}
