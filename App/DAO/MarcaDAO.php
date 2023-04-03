<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\MarcaModel;
use \PDO;

class MarcaDAO extends DAO
{
    private $conexao;
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
    }

    public function select()
    {
        $sql = "SELECT * FROM marca";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_CLASS);

        

        return $res;
    }

}
