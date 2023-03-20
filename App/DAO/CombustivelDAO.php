<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\CombustivelModel;
use \PDO;

class CombustivelDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM combustivel";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
