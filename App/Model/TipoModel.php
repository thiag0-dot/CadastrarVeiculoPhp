<?php

namespace APP\Model;
use APP\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function save()
    {
        include 'DAO/TipoDAO.php';
        $dao = new TipoDAO();

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
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new TipoDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $dao->delete($id);
    }
}