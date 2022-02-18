<?php

class Controller
{
    protected ?PDO $pdo;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->getPDO();
    }
}
