<?php
require __DIR__ .  '/../vendor/autoload.php';
ini_set('display_errors', 1);
echo '../vendor';
return new Service\UsersService(
    require "config-dev/db-connection.php"
);
