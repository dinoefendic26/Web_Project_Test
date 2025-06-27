<?php

require_once __DIR__ . '../../config.php';

class BaseDao {
    protected $connection;
    protected $table;

    public function __construct($table) {
        $this->table = $table;
        $this->connection = Database::connectDatabase();
    }
}

?>