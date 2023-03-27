<?php

namespace APP\DAO;

use \PDO;

class DAO extends PDO
{
    public $dsn = "mysql:host=localhost:3307;dbname=cadastroveiculo";
    public $user = "root";
    public $pass = "etecjau";

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}