<?php

use APP\Controller\BackupController;
use APP\Controller\CombustivelController;
use APP\Controller\FabricanteController;
use APP\Controller\MarcaController;
use APP\Controller\ModeloController;
use APP\Controller\TipoController;
use APP\Controller\VeiculoController;
use APP\Model\MarcaModel;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/':
        include(BASEDIR . "/View/modules/Home.php");
    break;
    case '/Veiculo':
        VeiculoController::index();
    break;

    case '/Veiculo/Cadastro':
        VeiculoController::form();
    break;

    case '/Veiculo/save':
        VeiculoController::save();
    break; 

    case '/Combustivel':
        CombustivelController::index();
    break;

    case '/Combustivel/Cadastro':
        CombustivelController::form();
    break;

    case '/Combustivel/save':
        CombustivelController::save();
    break; 

    case '/Fabricante':
        FabricanteController::index();
    break;

    case '/Fabricante/Cadastro':
        FabricanteController::form();
    break;

    case '/Fabricante/save':
        FabricanteController::save();
    break; 

    case '/Marca':
        MarcaController::index();
    break;

    case '/Marca/Cadastro':
        MarcaController::form();
    break;

    case '/Marca/save':
        MarcaController::save();
    break; 

    case '/Modelo':
        ModeloController::index();
    break;

    case '/Modelo/Cadastro':
        ModeloController::form();
    break;

    case '/Modelo/save':
        ModeloController::save();
    break; 

    case '/Tipo':
        TipoController::index();
    break;

    case '/Tipo/Cadastro':
        TipoController::form();
    break;

    case '/Tipo/save':
        TipoController::save();
    break; 

    case "/backup/exportar":
        BackupController::Export_Backup();
    break;

    case "/backup/importar":
        BackupController::Import_Backup();
    break;

    default:
        echo "erro 404";
    break;
}