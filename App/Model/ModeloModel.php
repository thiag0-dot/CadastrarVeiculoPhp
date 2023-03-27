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
}