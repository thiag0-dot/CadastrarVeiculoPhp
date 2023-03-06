<?php

namespace CADASTRO_VEICULO\App\Model;
use CADASTRO_VEICULO\App\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'App/DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }
}