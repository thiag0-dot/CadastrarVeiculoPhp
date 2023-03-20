<?php

namespace APP\Model;
use APP\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'APP/DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }
}