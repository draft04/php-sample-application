<?php
echo "1";
require __DIR__ . '/../vendor/autoload.php';
ini_set('display_errors', 1);
$lastJoinedUsers = (require "dic/users.php")->getLastJoined();
echo "index.php";
switch (require "dic/negotiated_format.php") {
    case "text/html":
        (new Views\Layout(
            "Twitter - Newcomers", new Views\Users\Listing($lastJoinedUsers), true
        ))();
        exit;

    case "application/json":
        header("Content-Type: application/json");
        echo json_encode($lastJoinedUsers);
        exit;
}

http_response_code(406);
