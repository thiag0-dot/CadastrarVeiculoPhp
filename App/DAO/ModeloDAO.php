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

    public function insert(ModeloModel $model)
    {
        $sql = "INSERT INTO modelo (Nome) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->execute();
    }

    public function update(ModeloModel $model)
    {
        $sql = "UPDATE modelo SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM modelo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/ModeloModel.php';

        $sql = "SELECT * FROM modelo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("APP\Model\ModeloModel");
    }

    public function select()
    {
        $sql = "SELECT * FROM modelo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
