<?php

namespace APP\Model;
use APP\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }

    public function save()
    {
        include 'DAO/FabricanteDAO.php';
        $dao = new FabricanteDAO();

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
        include 'DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new FabricanteDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $dao->delete($id);
    }
}