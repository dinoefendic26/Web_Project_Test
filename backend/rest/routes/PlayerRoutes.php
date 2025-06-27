<?php

Flight::route("GET /players", function() {
    Flight::json(Flight::player_service()->getAllPlayers());
});

?>