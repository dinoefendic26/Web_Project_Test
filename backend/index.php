<?php

//-- Test FlightPHP route --//
// require 'vendor/autoload.php';  //run autoloader
// Flight::route('GET /test', function() {
//     echo "This is test route";
// });
// Flight::start();

//-- Test DB connection --//
require_once __DIR__ . "/rest/config.php";
Database::connectDatabase();

?>