<?php

namespace APP\Model;
use APP\DAO\MarcaDAO;

class MarcaModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include '../App/DAO/MarcaDAO.php';

        $dao = new MarcaDAO();
        $this->rows = $dao->select();
    }
}