<?php

namespace CADASTRO_VEICULO\App\Model;
use CADASTRO_VEICULO\App\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'App/DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }
}