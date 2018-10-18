<?php

for ($i=2; $i < count($argv); $i++) {
    $forge->deleteSite(
        getenv('SERVER_ID'),
        $argv[$i]
    );
}
