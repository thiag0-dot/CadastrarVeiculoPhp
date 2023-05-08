<?php 

namespace APP\Controller;
use APP\Model\ModeloModel;

class ModeloController extends Controller
{
    public static function index()
    {
        $model = new ModeloModel();
        $model->getAllRows();

        include 'View/modules/ModeloListar.php';
    }

    public static function form()
    {
        $model = new ModeloModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/ModeloCadastro.php';
    }

    public static function save()
    {
        $tipo = new ModeloModel();
        $tipo->id = $_POST['id'];
        $tipo->Nome = $_POST['nome'];

        $tipo->save();
        header("Location: /Modelo");
    }

    public static function delete()
    {
        $delete = new ModeloModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Modelo");
    }
}