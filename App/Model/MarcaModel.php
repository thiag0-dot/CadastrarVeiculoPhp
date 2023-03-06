<?php

namespace CADASTRO_VEICULO\App\Model;
use CADASTRO_VEICULO\App\DAO\MarcaDAO;

class MarcaModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'App/DAO/MarcaDAO.php';

        $dao = new MarcaDAO();

        $this->rows = $dao->select();
    }
}