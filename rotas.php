<?php 

use CADASTRO_VEICULO\App\Controller\VeiculoController;

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{
    case '/Veiculo':
        VeiculoController::index();
    break;

    case '/Veiculo/Cadastro':
        VeiculoController::form();
    break;

    case '/Veiculo/save':
        VeiculoController::save();
    break; 

    default:
        echo "erro 404";
    break;
}