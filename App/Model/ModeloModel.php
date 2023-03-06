<?php

namespace CADASTRO_VEICULO\App\Model;
use CADASTRO_VEICULO\App\DAO\ModeloDAO;

class ModeloModel extends Model
{
    public $id, $Nome;

    public function getAllRows()
    {
        include 'App/DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $this->rows = $dao->select();
    }
}