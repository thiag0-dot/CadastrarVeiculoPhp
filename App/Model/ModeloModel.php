<?php

namespace APP\Model;
use APP\DAO\ModeloDAO;

class ModeloModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $this->rows = $dao->select();
    }

    public function save()
    {
        include 'DAO/ModeloDAO.php';
        $dao = new ModeloDAO();

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
        include 'DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new ModeloDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $dao->delete($id);
    }
}