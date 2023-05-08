<?php 

namespace APP\Controller;
use APP\Model\MarcaModel;

class MarcaController extends Controller
{
    public static function index()
    {
        $model = new MarcaModel();
        $model->getAllRows();

        include 'View/modules/MarcaListar.php';
    }

    public static function form()
    {
        $model = new MarcaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/MarcaCadastro.php';
    }

    public static function save()
    {
        $tipo = new MarcaModel();
        $tipo->id = $_POST['id'];
        $tipo->Nome = $_POST['nome'];

        $tipo->save();
        header("Location: /Marca");
    }

    public static function delete()
    {
        $delete = new MarcaModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Marca");
    }
}