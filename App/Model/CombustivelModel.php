<?php

namespace APP\Model;
use APP\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }

    public function save()
    {
        include 'DAO/CombustivelDAO.php';
        $dao = new CombustivelDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else
        {
            $dao->update($this);
        }
    }

    public function getById(int $id)
    {
        include 'DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new CombustivelDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $dao->delete($id);
    }
}