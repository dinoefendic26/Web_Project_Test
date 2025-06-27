<?php

require_once __DIR__ . "../../dao/BaseDao.php";

class BaseService {
    protected $dao;

    public function __construct(BaseDao $dao) {
        $this->dao = $dao;
    }
}

?>