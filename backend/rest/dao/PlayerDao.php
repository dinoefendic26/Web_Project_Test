<?php

require_once __DIR__ . '/BaseDao.php';

class PlayerDao extends BaseDao {
    public function __construct() {
        parent::__construct("players");
    }

    public function getAllPlayers() {
        $sql = "SELECT * FROM players";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>