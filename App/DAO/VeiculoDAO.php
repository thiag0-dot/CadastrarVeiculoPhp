<?php

namespace CADASTRO_VEICULO\App\DAO;

use CADASTRO_VEICULO\App\DAO\DAO;
use CADASTRO_VEICULO\App\Model\VeiculoModel;
use \PDO;

class VeiculoDAO extends DAO
{
    private $conexao;
    public function __construct()
    {
        include_once 'DAO.php';

        $this->conexao = new DAO();
    }

    public function insert(VeiculoModel $model)
    {
        $sql = "INSERT INTO cadastroveiculo
                (Marca, Modelo, Fabricante, Tipo, Ano, Combustivel, Cor, Chassi, Km, Revisao, Sinistro,
                RouboFurto, Aluguel, Venda, Particular)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        $stmt =$this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->Marca);
        $stmt->bindValue(2, $model->Modelo);
        $stmt->bindValue(3, $model->Fabricante);
        $stmt->bindValue(4, $model->Tipo);
        $stmt->bindValue(5, $model->Ano);
        $stmt->bindValue(6, $model->Combustivel);
        $stmt->bindValue(7, $model->Cor);
        $stmt->bindValue(8, $model->Chassi);
        $stmt->bindValue(9, $model->Km);
        $stmt->bindValue(10, $model->Revisao);
        $stmt->bindValue(11, $model->Sinistro);
        $stmt->bindValue(12, $model->RouboFurto);
        $stmt->bindValue(13, $model->Aluguel);
        $stmt->bindValue(14, $model->Venda);
        $stmt->bindValue(15, $model->Particular);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT v.id, m.Marca, mo.Modelo, f.Fabricante, c.Combustivel, t.Tipo 
                FROM Veiculo v 
                JOIN Marca m on (m.id = v.Marca) 
                JOIN Modelo mo on (mo.id = v.Modelo) 
                JOIN Fabricante f on (f.id = v.Fabricante) 
                JOIN Tipo t on (t.id = v.Tipo) 
                JOIN Combustivel c on (c.id = v.Combustivel);";
        
        $stmt = $this->conexao->prepare($sql);
        $tmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'App/Model/VeiculoModel.php';

        $sql = "SELECT * FROM veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    
}