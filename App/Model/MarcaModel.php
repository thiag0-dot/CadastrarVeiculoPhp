<?php

namespace APP\Model;
use APP\DAO\MarcaDAO;

class MarcaModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'DAO/MarcaDAO.php';

        $dao = new MarcaDAO();
        $this->rows = $dao->select();
    }

    public function save()
    {
        include 'DAO/MarcaDAO.php';
        $dao = new MarcaDAO();

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
        include 'DAO/MarcaDAO.php';

        $dao = new MarcaDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new MarcaDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/MarcaDAO.php';

        $dao = new MarcaDAO();

        $dao->delete($id);
    }
}