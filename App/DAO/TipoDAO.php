<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM tipo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
