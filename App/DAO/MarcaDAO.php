<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\MarcaModel;
use \PDO;

class MarcaDAO extends DAO
{
    
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM marca";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
