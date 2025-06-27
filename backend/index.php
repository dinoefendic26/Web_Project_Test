<?php

//-- Test FlightPHP route --//
// require 'vendor/autoload.php';  //run autoloader
// Flight::route('GET /test', function() {
//     echo "This is test route";
// });
// Flight::start();

//-- Test DB connection --//
// require_once __DIR__ . "/rest/config.php";
// Database::connectDatabase();

//-- Test PlayerDao --//
// require_once "rest/dao/PlayerDao.php";
// $playerDao = new PlayerDao();
// $player = $playerDao->getAllPlayers();
// $a = $player[0];
// echo $a["first_name"] . " " . $a["last_name"];

//-- Test PlayerService --//
// require_once "rest/services/PlayerService.php";
// $playerService = new PlayerService($playerDao);
// $player = $playerService->getAllPlayers();
// print_r($player);



require "vendor/autoload.php";
require_once __DIR__ . "/rest/services/PlayerService.php";

Flight::register('player_service', 'PlayerService');

require_once __DIR__ . "/rest/routes/PlayerRoutes.php";

Flight::start();

?>