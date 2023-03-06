<?php

namespace CADASTRO_VEICULO\App\DAO;

use \PDO;

class DAO extends PDO
{
    public $dsn = "mysql:host=localhost:3306;dbname=cadastroveiculo";
    public $user = "root";
    public $pass = "thiagodev";

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}