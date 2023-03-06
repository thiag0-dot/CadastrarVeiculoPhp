<?php 

namespace CADASTRO_VEICULO\App\Model;

use CADASTRO_VEICULO\App\DAO\
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

    public function save()
    {
        include 'App/DAO/VeiculoDAO.php';
        $dao = new VeiculoDAO();

        $this->id;
        $dao->insert($this->id);
    
    }

    public function getAllRows()
    {
        include 'App/DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'App/DAO/VeiculoDAO.php';

        $dao = new VeiculoDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new VeiculoDAO();
    }

    public function getAllMarca(){
        include 'App/DAO/MarcaDAO.php';

        $dao = new MarcaDAO();

        $this->lista_marca = $dao->select();
    }

    public function getAllModelo(){
        include 'App/DAO/ModeloDAO.php';

        $dao = new ModeloDAO();

        $this->lista_modelo = $dao->select();
    }

    public function getAllFabricante(){
        include 'App/DAO/FabricanteDAO.php';

        $dao = new FabricanteDAO();

        $this->lista_Fabricante = $dao->select();
    }

    public function getAllCombustivel(){
        include 'App/DAO/CombustivelDAO.php';

        $dao = new CombustivelDAO();

        $this->lista_combustivel = $dao->select();
    }

    public function getAllTipo(){
        include 'App/DAO/TipoDAO.php';

        $dao = new TipoDAO();

        $this->lista_tipo = $dao->select();
    }

}