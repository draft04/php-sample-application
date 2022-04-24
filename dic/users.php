<?php
require __DIR__ .  '/../vendor/autoload.php';

echo '../vendor';
return new Service\UsersService(
    require "config-dev/db-connection.php"
);
