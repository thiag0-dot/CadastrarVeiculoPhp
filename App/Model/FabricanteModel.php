<?php

namespace APP\Model;
use APP\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'APP/DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }
}