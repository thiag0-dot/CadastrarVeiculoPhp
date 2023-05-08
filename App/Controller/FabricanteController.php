<?php 

namespace APP\Controller;
use APP\Model\FabricanteModel;

class FabricanteController extends Controller
{
    public static function index()
    {
        $model = new FabricanteModel();
        $model->getAllRows();

        include 'View/modules/FabricanteListar.php';
    }

    public static function form()
    {
        $model = new FabricanteModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/FabricanteCadastro.php';
    }

    public static function save()
    {
        $tipo = new FabricanteModel();
        $tipo->id = $_POST['id'];
        $tipo->Nome = $_POST['nome'];

        $tipo->save();
        header("Location: /Fabricante");
    }

    public static function delete()
    {
        $delete = new FabricanteModel();

        $delete->delete((int) $_GET['id']);

        header("Location: /Fabricante");
    }
}