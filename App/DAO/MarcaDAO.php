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

    public function insert(MarcaModel $model)
    {
        $sql = "INSERT INTO marca (Nome) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->execute();
    }

    public function update(MarcaModel $model)
    {
        $sql = "UPDATE marca SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public function selectById(int $id)
    {
        include_once 'Model/MarcaModel.php';

        $sql = "SELECT * FROM marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("APP\Model\MarcaModel");
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
