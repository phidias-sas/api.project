<?php
include "../vendor/autoload.php";

use Phidias\Api\Server;

// Import modules:
//Server::import("../path/to/module");
//Server::import("../vendor/phidias/api/modules/debug.api");
//Server::import("../vendor/phidias/documentation.api");
//Server::import("../vendor/phidias/oauth.api");
//Server::import("../vendor/phidias/calendar.api");

// Import the current project
Server::import("../");

Server::run();