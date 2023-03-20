<?php

namespace APP\DAO;

use \PDO;

class DAO extends PDO
{
    protected $conexao;
    public function __construct()
    {
        $dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" .  $_ENV['db']['database'];
        $this->$conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']) ;
    }
}