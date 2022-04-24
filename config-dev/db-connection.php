<?php
require __DIR__ . '/../vendor/autoload.php';
ini_set('display_errors', 1);

echo "config/db-connection.php";
return new PDO("mysql:host=localhost;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);


