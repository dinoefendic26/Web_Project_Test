<?php

require_once __DIR__ . "/BaseService.php";
require_once __DIR__ . "../../dao/PlayerDao.php";

class PlayerService extends BaseService {
    public function __construct() {
        $dao = new PlayerDao();
        parent::__construct($dao);
    }

    public function getAllPlayers() {
        return $this->dao->getAllPlayers();
    }
}

?>