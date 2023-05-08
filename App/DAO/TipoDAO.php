<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{
    private $conexao;
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO tipo (Nome) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->execute();
    }

    public function update(TipoModel $model)
    {
        $sql = "UPDATE tipo SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM tipo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/TipoModel.php';

        $sql = "SELECT * FROM tipo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("APP\Model\TipoModel");
    }

    public function select()
    {
        $sql = "SELECT * FROM tipo";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
