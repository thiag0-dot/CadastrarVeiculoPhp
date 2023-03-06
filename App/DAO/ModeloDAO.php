<?php

namespace CADASTRO_VEICULO\App\DAO;

use CADASTRO_VEICULO\App\DAO\DAO;
use CADASTRO_VEICULO\App\Model\ModeloModel;
use \PDO;

class ModeloDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
        $sql = "SELECT * FROM Modelo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
