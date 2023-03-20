<?php 

namespace APP\Model;

use APP\DAO\
{
    VeiculoDAO,
    MarcaDAO,
    ModeloDAO,
    CombustivelDAO,
    FabricanteDAO,
    TipoDAO,
};

class VeiculoModel extends Model
{
    public $id, $Marca, $Modelo, $Fabricante, $Tipo, $Ano, $Combustivel, $Cor, $Chassi, $Km, $Revisao, $Sinistro,
    $RouboFurto, $Aluguel, $Venda, $Particular;

    public $lista_marca = array();
    public $lista_modelo = array();
    public $lista_Fabricante = array();
    public $lista_tipo = array();
    public $lista_combustivel = array();

    public function save()
    {
        include 'APP/DAO/VeiculoDAO.php';
        $dao = new VeiculoDAO();

        $this->id;
        $dao->insert($this->id);
    
    }

    public function getAllRows()
    {
        include 'APP/DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'APP/DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new VeiculoDAO();
    }

    public function getAllMarca(){
        include 'APP/DAO/MarcaDAO.php';

        $dao = new MarcaDAO();

        $this->lista_marca = $dao->select();
    }

    public function getAllModelo(){
        include 'APP/DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $this->lista_modelo = $dao->select();
    }

    public function getAllFabricante(){
        include 'APP/DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $this->lista_Fabricante = $dao->select();
    }

    public function getAllCombustivel(){
        include 'APP/DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $this->lista_combustivel = $dao->select();
    }

    public function getAllTipo(){
        include 'APP/DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->lista_tipo = $dao->select();
    }

}