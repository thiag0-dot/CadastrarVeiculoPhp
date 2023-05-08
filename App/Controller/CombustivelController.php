<?php 

namespace APP\Controller;
use APP\Model\CombustivelModel;

class CombustivelController extends Controller
{
    public static function index()
    {
        $model = new CombustivelModel();
        $model->getAllRows();

        include 'View/modules/CombustivelListar.php';
    }

    public static function form()
    {
        $model = new CombustivelModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/CombustivelCadastro.php';
    }

    public static function save()
    {
        $tipo = new CombustivelModel();
        $tipo->id = $_POST['id'];
        $tipo->Nome = $_POST['nome'];

        $tipo->save();
        header("Location: /Combustivel");
    }

    public static function delete()
    {
        $delete = new CombustivelModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Combustivel");
    }
}