<?php 

namespace APP\Controller;

use APP\Model\
{
    VeiculoModel,
    MarcaModel,
    ModeloModel,
    CombustivelModel,
    FabricanteModel,
    TipoModel,
};

class VeiculoController extends Controller
{
    public static function index()
    {

        $model = new VeiculoModel();
        $model->getAllRows();

        include 'View/modules/VeiculoListar.php';
    }

    public static function form()
    {
        $model = new VeiculoModel();

        if(isset($_GET['id']))
        {
            $model = $model->getById( (int) $_GET['id']);
        }

        $model_marca = new MarcaModel();
        $model_marca->getAllRows();
        $model->lista_marca = $model_marca->rows;

        $model_modelo = new ModeloModel();
        $model_modelo->getAllRows();
        $model->lista_modelo = $model_modelo->rows;

        $model_fabricante = new FabricanteModel();
        $model_fabricante->getAllRows();
        $model->lista_fabricante = $model_fabricante->rows;

        $model_combustivel = new CombustivelModel();
        $model_combustivel->getAllRows();
        $model->lista_combustivel = $model_combustivel->rows;

        $model_tipo = new TipoModel();
        $model_tipo->getAllRows();
        $model->lista_tipo = $model_tipo->rows;

        include 'View/modules/VeiculoCadastro.php';
    }

    public static function save()
    {
        $Veiculo = new VeiculoModel();
        $Veiculo->id= $_POST['idVeiculo'];
        $Veiculo->Marca = $_POST['Marca'];
        $Veiculo->Modelo = $_POST['Modelo'];
        $Veiculo->Fabricante = $_POST['Fabricante'];
        $Veiculo->Tipo = $_POST['Tipo'];
        $Veiculo->Ano = $_POST['Ano'];
        $Veiculo->Combustivel = $_POST['Combustivel'];
        $Veiculo->Cor = $_POST['Cor'];
        $Veiculo->Chassi = $_POST['Chassi'];
        $Veiculo->Km = $_POST['Km'];
        $Veiculo->Revisao = isset($_POST['Revisao']);
        $Veiculo->Sinistro = isset($_POST['Sinistro']);
        $Veiculo->RouboFurto = isset($_POST['RouboFurto']);
        $Veiculo->Aluguel = isset($_POST['Aluguel']);
        $Veiculo->Venda = isset($_POST['Venda']);
        $Veiculo->Particular = isset($_POST['Particular']);

        $Veiculo->save();
        header("Location: /Veiculo");
    }
}