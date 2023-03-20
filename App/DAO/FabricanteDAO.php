<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\FabricanteModel;
use \PDO;

class FabricanteDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM fabricante";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
