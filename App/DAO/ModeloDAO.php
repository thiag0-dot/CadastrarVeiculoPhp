<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\ModeloModel;
use \PDO;

class ModeloDAO extends DAO
{

    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM modelo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
