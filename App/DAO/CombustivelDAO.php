<?php

namespace APP\DAO;

use APP\DAO\DAO;
use APP\Model\CombustivelModel;
use \PDO;

class CombustivelDAO extends DAO
{
    private $conexao;
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
    }

    public function insert(CombustivelModel $model)
    {
        $sql = "INSERT INTO combustivel (Nome) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->execute();
    }

    public function update(CombustivelModel $model)
    {
        $sql = "UPDATE combustivel SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM combustivel WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CombustivelModel.php';

        $sql = "SELECT * FROM combustivel WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("APP\Model\CombustivelModel");
    }

    public function select()
    {
        $sql = "SELECT * FROM combustivel";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
