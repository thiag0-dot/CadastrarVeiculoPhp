<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\ModeloModel;
use \PDO;

class ModeloDAO extends DAO
{
    private $conexao;
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
    }

    public function select()
    {
        $sql = "SELECT * FROM modelo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
