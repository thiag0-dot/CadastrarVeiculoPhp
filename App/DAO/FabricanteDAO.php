<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\FabricanteModel;
use \PDO;

class FabricanteDAO extends DAO
{
    private $conexao;  
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
        
    }

    public function insert(FabricanteModel $model)
    {
        $sql = "INSERT INTO fabricante (Nome) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->execute();
    }

    public function update(FabricanteModel $model)
    {
        $sql = "UPDATE fabricante SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/FabricanteModel.php';

        $sql = "SELECT * FROM fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("APP\Model\FabricanteModel");
    }

    public function select()
    {
        $sql = "SELECT * FROM fabricante";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
