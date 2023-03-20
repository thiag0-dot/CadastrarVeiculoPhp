<?php

namespace APP\Model;
use APP\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'APP/DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }
}