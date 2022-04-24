<?php

require __DIR__ .  '/../vendor/autoload.php';

return new Service\TweetsService(
    require "config/db-connection.php"
);
