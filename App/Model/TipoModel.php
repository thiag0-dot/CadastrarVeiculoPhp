<?php

namespace CADASTRO_VEICULO\App\Model;
use CADASTRO_VEICULO\App\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'App/DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }
}